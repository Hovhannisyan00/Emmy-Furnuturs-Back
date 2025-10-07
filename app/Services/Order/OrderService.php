<?php

namespace App\Services\Order;

use App\Contracts\Order\IOrderRepository;
use App\Services\BaseService;

class OrderService extends BaseService
{
    public function __construct(
        IOrderRepository $repository
    ) {
        $this->repository = $repository;
    }
}
