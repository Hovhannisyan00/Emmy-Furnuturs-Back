<?php

namespace App\Http\Controllers\Dashboard\Products;

use App\Http\Controllers\Dashboard\BaseController;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Product\ProductSearchRequest;
use App\Models\Product\ProductSearch;
use App\Models\Product\Product;
use App\Services\Product\ProductService;
use App\Contracts\Product\IProductRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;

class ProductController extends BaseController
{
    public function __construct(
        ProductService $service,
        IProductRepository $repository
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function index(): View
    {
        return $this->dashboardView('product.index');
    }

    public function getListData(ProductSearchRequest $request): array
    {
        $searcher = new ProductSearch($request->validated());

        return [
            'recordsTotal' => $searcher->totalCount(),
            'recordsFiltered' => $searcher->filteredCount(),
            'data' => $searcher->search(),
        ];
    }

    public function create(): View
    {
        return $this->dashboardView(
            view: 'product.form',
            vars: $this->service->getViewData()
        );
    }

    public function store(ProductRequest $request): JsonResponse
    {
        // For storing relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated());
        $this->repository->create($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.products.index')
        ]);
    }

    public function show(Product $product): View
    {
       /* return $this->dashboardView(
           view: 'product.form',
           vars: $this->service->getViewData($product->id),
           viewMode: 'show'
       );*/
    }

    public function edit(Product $product): View
    {
        // For getting other info except current model use service
        /* return $this->dashboardView(
            view: 'product.form',
            vars: $this->service->getViewData($product->id),
            viewMode: 'edit'
        );*/

        return $this->dashboardView(
            view: 'product.form',
            vars: ['product' => $product],
            viewMode: 'edit'
        );
    }

    public function update(ProductRequest $request, Product $product): JsonResponse
    {
        // For updating relations, sending emails, ...etc(extra functionality) use service
        // $this->service->createOrUpdate($request->validated(), $product->id);
        $this->repository->update($product->id, $request->validated());

        return $this->sendOkUpdated([
            'redirectUrl' => route('dashboard.products.index')
        ]);
    }

    public function destroy(Product $product): JsonResponse
    {
        // If deleting other data except model use service
        // $this->service->delete($product->id);
        $this->repository->destroy($product->id);

        return $this->sendOkDeleted();
    }
}
