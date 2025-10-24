<?php

namespace App\Contracts\Product;

use Illuminate\Support\Collection;


interface IProductRepository
{
    public function getEightWithPhoto(): Collection;

    public function getTargetProducts(int $categoryId): Collection;
}
