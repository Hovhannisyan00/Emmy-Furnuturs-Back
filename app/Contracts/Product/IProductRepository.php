<?php

namespace App\Contracts\Product;

use Illuminate\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface IProductRepository
{
    public function getEightWithPhoto(): Collection;

    public function getTargetProducts(int $categoryId): Collection;

    public function getPaginationProducts(int $count): LengthAwarePaginator;

    public function getFeaturedProducts(int $productId): Collection;
}
