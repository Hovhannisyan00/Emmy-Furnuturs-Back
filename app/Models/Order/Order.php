<?php

namespace App\Models\Order;

use App\Models\Base\BaseModel;

class Order extends BaseModel
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name'
    ];
}
