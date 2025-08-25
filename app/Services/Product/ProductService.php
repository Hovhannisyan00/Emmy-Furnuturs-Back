<?php

namespace App\Services\Product;

use App\Contracts\Product\IProductRepository;
use App\Services\BaseService;

class ProductService extends BaseService
{
    public function __construct(
        IProductRepository $repository
    ) {
        $this->repository = $repository;
    }
}
