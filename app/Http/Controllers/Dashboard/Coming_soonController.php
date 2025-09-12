<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Coming_soon\IComing_soonRepository;
use App\Http\Requests\Coming_soon\Coming_soonRequest;
use App\Http\Requests\Coming_soon\Coming_soonSearchRequest;
use App\Models\Coming_soon\Coming_soon;
use App\Models\Coming_soon\Coming_soonSearch;
use App\Services\Coming_soon\Coming_soonService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class Coming_soonController extends BaseController
{
    public function __construct(
        Coming_soonService $service,
        IComing_soonRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('coming_soon.index');
    }

    public function getListData(Coming_soonSearchRequest $request): array
    {
        $searcher = new Coming_soonSearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'coming_soon.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(Coming_soonRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated());
        $this->repository->create($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.coming_soons.index')
        ]);
    }

    public function show(Coming_soon $comingSoon): View
    {
        /* return $this->dashboardView(
            view: 'coming_soon.form',
            vars: $this->service->getViewData($comingSoon->id),
            viewMode: 'show'
        );*/
    }

    public function edit(Coming_soon $comingSoon): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'coming_soon.form',
            vars: $this->service->getViewData($comingSoon->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'coming_soon.form',
            vars: ['comingSoon' => $comingSoon],
            viewMode: 'edit'
        );
    }

    public function update(Coming_soonRequest $request, Coming_soon $comingSoon): JsonResponse
    {
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $comingSoon->id);
        $this->repository->update($comingSoon->id, $request->validated());

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.coming_soons.index')
        ]);
    }

    public function destroy(Coming_soon $comingSoon): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($comingSoon->id);
        $this->repository->destroy($comingSoon->id);

        return $this->sendOkDeleted();
    }
}
