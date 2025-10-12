<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Partner\IPartnerRepository;
use App\Http\Requests\Partner\PartnerRequest;
use App\Http\Requests\Partner\PartnerSearchRequest;
use App\Models\Partner\Partner;
use App\Models\Partner\PartnerSearch;
use App\Services\Partner\PartnerService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class PartnerController extends BaseController
{
    public function __construct(
        PartnerService $service,
        IPartnerRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('partner.index');
    }

    public function getListData(PartnerSearchRequest $request): array
    {
        $searcher = new PartnerSearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'partner.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(PartnerRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        $this->service->createOrUpdate($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.partners.index')
        ]);
    }

    public function show(Partner $partner): View
    {
        /* return $this->dashboardView(
            view: 'partner.form',
            vars: $this->service->getViewData($partner->id),
            viewMode: 'show'
        );*/
    }

    public function edit(Partner $partner): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'partner.form',
            vars: $this->service->getViewData($partner->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'partner.form',
            vars: ['partner' => $partner],
            viewMode: 'edit'
        );
    }

    public function update(PartnerRequest $request, Partner $partner): JsonResponse
    {
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $partner->id);
        $this->repository->update($partner->id, $request->validated());

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.partners.index')
        ]);
    }

    public function destroy(Partner $partner): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($partner->id);
        $this->repository->destroy($partner->id);

        return $this->sendOkDeleted();
    }

    public function getPartnersData(): JsonResponse
    {
        $partners = Partner::with('photo')->get()->map(function ($partner) {
            return [
                'id' => $partner->id,
                'name' => $partner->name,
                'photo_url' => $partner->photo->file_url ?? null,
            ];
        });

        return response()->json($partners);
    }
}
