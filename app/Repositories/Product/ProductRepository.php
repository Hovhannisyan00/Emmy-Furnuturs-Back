<?php

namespace App\Repositories\Product;

use App\Contracts\Product\IProductRepository;
use App\Repositories\BaseRepository;
use App\Models\Product\Product;
use Illuminate\Support\Collection;

class ProductRepository extends BaseRepository implements IProductRepository
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
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
}
