<?php

namespace App\Repositories\Product;

use App\Contracts\Product\IProductRepository;
use App\Models\Product\Product;
use App\Repositories\BaseRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ProductRepository extends BaseRepository implements IProductRepository
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function getPaginationProducts(int $perPage = 6): LengthAwarePaginator
    {
        return $this->model
            ->with(['photo1'])
            ->orderByDesc('created_at')
            ->paginate($perPage);
    }

    public function getEightWithPhoto(): Collection
    {
        return $this->model
            ->with(['photo1'])
            ->take(8)
            ->get();
    }

    public function getTargetProducts(int $categoryId): Collection
    {
        return $this->model
            ->where('category_id', $categoryId)
            ->latest()
            ->take(8)
            ->get();
    }

    public function getFeaturedProducts(int $productId): Collection
    {
        $product = $this->model->findOrFail($productId);

        return $this->model
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('discount', '>', 0)
            ->with(['photo1'])
            ->latest()
            ->take(4)
            ->get();
    }
}
