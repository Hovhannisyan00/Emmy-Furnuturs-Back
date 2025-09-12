<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Get_in_touch\IGet_in_touchRepository;
use App\Http\Requests\Get_in_touch\Get_in_touchRequest;
use App\Http\Requests\Get_in_touch\Get_in_touchSearchRequest;
use App\Models\Get_in_touch\Get_in_touch;
use App\Models\Get_in_touch\Get_in_touchSearch;
use App\Services\Get_in_touch\Get_in_touchService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class Get_in_touchController extends BaseController
{
    public function __construct(
        Get_in_touchService $service,
        IGet_in_touchRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('get_in_touch.index');
    }

    public function getListData(Get_in_touchSearchRequest $request): array
    {
        $searcher = new Get_in_touchSearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'get_in_touch.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(Get_in_touchRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated());
        $this->repository->create($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.get_in_touches.index')
        ]);
    }

    public function show(Get_in_touch $getInTouch): View
    {
        /* return $this->dashboardView(
            view: 'get_in_touch.form',
            vars: $this->service->getViewData($getInTouch->id),
            viewMode: 'show'
        );*/
    }

    public function edit(Get_in_touch $getInTouch): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'get_in_touch.form',
            vars: $this->service->getViewData($getInTouch->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'get_in_touch.form',
            vars: ['getInTouch' => $getInTouch],
            viewMode: 'edit'
        );
    }

    public function update(Get_in_touchRequest $request, Get_in_touch $getInTouch): JsonResponse
    {
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $getInTouch->id);
        $this->repository->update($getInTouch->id, $request->validated());

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.get_in_touches.index')
        ]);
    }

    public function destroy(Get_in_touch $getInTouch): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($getInTouch->id);
        $this->repository->destroy($getInTouch->id);

        return $this->sendOkDeleted();
    }
}
