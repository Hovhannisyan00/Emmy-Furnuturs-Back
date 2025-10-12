<?php

namespace App\Models\Basket;

use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\Basket\Traits\BasketRelations;

class Basket extends BaseModel
{
    use HasFileData;
    use BasketRelations;

    protected $fillable = [
        'name',
        'is_active',
        'user_id',
    ];
}
