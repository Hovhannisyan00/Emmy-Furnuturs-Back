<?php

namespace App\Models\BasketItem;

use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\BasketItem\Traits\BasketItemRelations;

class BasketItem extends BaseModel
{
    use HasFileData;
    use BasketItemRelations;

    protected $fillable = [
        'basket_id',
        'product_id',
        'quantity',
    ];
}
