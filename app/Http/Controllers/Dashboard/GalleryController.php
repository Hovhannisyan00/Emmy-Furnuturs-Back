<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Gallery\IGalleryRepository;
use App\Http\Requests\Gallery\GalleryRequest;
use App\Http\Requests\Gallery\GallerySearchRequest;
use App\Models\Gallery\Gallery;
use App\Models\Gallery\GallerySearch;
use App\Services\Gallery\GalleryService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class GalleryController extends BaseController
{
    public function __construct(
        GalleryService $service,
        IGalleryRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('gallery.index');
    }

    public function getListData(GallerySearchRequest $request): array
    {
        $searcher = new GallerySearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'gallery.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(GalleryRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated());
        $this->repository->create($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.galleries.index')
        ]);
    }

    public function show(Gallery $gallery): View
    {
        /* return $this->dashboardView(
            view: 'gallery.form',
            vars: $this->service->getViewData($gallery->id),
            viewMode: 'show'
        );*/
    }

    public function edit(Gallery $gallery): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'gallery.form',
            vars: $this->service->getViewData($gallery->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'gallery.form',
            vars: ['gallery' => $gallery],
            viewMode: 'edit'
        );
    }

    public function update(GalleryRequest $request, Gallery $gallery): JsonResponse
    {
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $gallery->id);
        $this->repository->update($gallery->id, $request->validated());

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.galleries.index')
        ]);
    }

    public function destroy(Gallery $gallery): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($gallery->id);
        $this->repository->destroy($gallery->id);

        return $this->sendOkDeleted();
    }
}
