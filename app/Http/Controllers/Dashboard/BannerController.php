<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\Banner\BannerRequest;
use App\Http\Requests\Banner\BannerSearchRequest;
use App\Models\Banner\BannerSearch;
use App\Models\Banner\Banner;
use App\Services\Banner\BannerService;
use App\Contracts\Banner\IBannerRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;

class BannerController extends BaseController
{
    public function __construct(
        BannerService $service,
        IBannerRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('banner.index');
    }

    public function getListData(BannerSearchRequest $request): array
    {
        $searcher = new BannerSearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'banner.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(BannerRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated());
        $this->repository->create($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.banners.index')
        ]);
    }

    public function show(Banner $banner): View
    {
       /* return $this->dashboardView(
           view: 'banner.form',
           vars: $this->service->getViewData($banner->id),
           viewMode: 'show'
       );*/
    }

    public function edit(Banner $banner): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'banner.form',
            vars: $this->service->getViewData($banner->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'banner.form',
            vars: ['banner' => $banner],
            viewMode: 'edit'
        );
    }

    public function update(BannerRequest $request, Banner $banner): JsonResponse
    {
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $banner->id);
        $this->repository->update($banner->id, $request->validated());

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.banners.index')
        ]);
    }

    public function destroy(Banner $banner): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($banner->id);
        $this->repository->destroy($banner->id);

        return $this->sendOkDeleted();
    }
}
