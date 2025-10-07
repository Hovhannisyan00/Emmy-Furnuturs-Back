<?php

namespace App\Repositories\Order;

use App\Contracts\Order\IOrderRepository;
use App\Repositories\BaseRepository;
use App\Models\Order\Order;

class OrderRepository extends BaseRepository implements IOrderRepository
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }
}
