<?php

namespace App\Http\Controllers\Dashboard\Categories;

use App\Contracts\Categorie\ICategorieRepository;
use App\Http\Controllers\Dashboard\BaseController;
use App\Http\Requests\Categorie\CategorieRequest;
use App\Http\Requests\Categorie\CategorieSearchRequest;
use App\Models\Categorie\Categorie;
use App\Models\Categorie\CategorieSearch;
use App\Services\Categorie\CategorieService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class CategorieController extends BaseController
{
    public function __construct(
        CategorieService $service,
        ICategorieRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('categorie.index');
    }

    public function getListData(CategorieSearchRequest $request): array
    {
        $searcher = new CategorieSearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'categorie.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(CategorieRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated());
        $this->repository->create($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.categories.index')
        ]);
    }
    public function getAllCategories(): array
    {
        return $this->service->getCategorieList();
    }

    // public function show(Categorie $categorie): View
    // {
    /* return $this->dashboardView(
        view: 'categorie.form',
        vars: $this->service->getViewData($categorie->id),
        viewMode: 'show'
    );*/
    // }

    public function edit(Categorie $categorie): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'categorie.form',
            vars: $this->service->getViewData($categorie->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'categorie.form',
            vars: ['categorie' => $categorie],
            viewMode: 'edit'
        );
    }

    public function update(CategorieRequest $request, Categorie $categorie): JsonResponse
    {
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $categorie->id);
        $this->repository->update($categorie->id, $request->validated());

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.categories.index')
        ]);
    }

    public function destroy(Categorie $categorie): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($categorie->id);
        $this->repository->destroy($categorie->id);

        return $this->sendOkDeleted();
    }

    public function getCategories(): JsonResponse
    {
        $categories = $this->repository->getFooterCategories();

         return response()->json($categories);
    }
}
