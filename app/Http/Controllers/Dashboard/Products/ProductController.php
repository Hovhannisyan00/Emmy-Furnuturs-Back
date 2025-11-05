<?php

namespace App\Http\Controllers\Dashboard\Products;

use App\Contracts\Product\IProductRepository;
use App\Http\Controllers\Dashboard\BaseController;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Product\ProductSearchRequest;
use App\Models\Product\Product;
use App\Models\Product\ProductSearch;
use App\Services\Product\ProductService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class ProductController extends BaseController
{
    public function __construct(
        ProductService $service,
        IProductRepository $repository,
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
        $this->service->createOrUpdate($request->validated());

        return $this->sendOkCreated([
            'redirectUrl' => route('dashboard.products.index')
        ]);
    }

    // public function show(Product $product): View
    // {
    /* return $this->dashboardView(
        view: 'product.form',
        vars: $this->service->getViewData($product->id),
        viewMode: 'show'
    );*/
    // }

    public function edit(Product $product): View
    {
        $product = $this->repository->find($product->id);
        $targetCategorie = $product->categories;
        return $this->dashboardView(
            view: 'product.form',
            vars: $this->service->getViewData($product->id),
            viewMode: 'edit'
        );
    }

    public function update(ProductRequest $request, Product $product): JsonResponse
    {
        $this->service->createOrUpdate($request->validated(), $product->id);

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

    public function getProduct(int $id): \Illuminate\View\View
    {
        dd(12345);
        $product = $this->repository->find($id);

        $featuredProducts = $this->repository->getFeaturedProducts($id);

        return view('web.single-product', [
            'product' => $product,
            'products' => null,
            'featuredProducts' => $featuredProducts,
        ]);
    }
}
