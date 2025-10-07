<?php

namespace App\Models\Order;

use App\Models\Base\BaseModel;
use App\Models\Order\Enums\OrderStatus;

class Order extends BaseModel
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'status',
        'total',
    ];



    protected $casts = [
        'status' => OrderStatus::class,
    ];
}
