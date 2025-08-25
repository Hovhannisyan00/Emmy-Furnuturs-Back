<?php

namespace App\Repositories\Product;

use App\Contracts\Product\IProductRepository;
use App\Repositories\BaseRepository;
use App\Models\Product\Product;

class ProductRepository extends BaseRepository implements IProductRepository
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}
