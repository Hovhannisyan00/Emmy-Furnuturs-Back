<?php

namespace App\Http\Controllers\Web\Product;

use App\Contracts\Product\IProductRepository;
use App\Http\Controllers\Controller;
use App\Services\Product\ProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class ProductController extends Controller
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
        $products = $this->repository->all();

        return view('web.products', [
            'products' => $products,
        ]);
    }

    public function getEightProducts(): JsonResponse
    {
        $products = $this->repository->getEightWithPhoto();

        $products = array_slice($products->toArray(), 0, 8);

        return response()->json($products);
    }

    public function getProduct(int $id): View
    {
        $product = $this->repository->find($id);

        return view('web.single-product', [
            'product' => $product,
        ]);
    }
}
