<?php

namespace App\Models\Product;

use App\Models\Base\BaseModel;
use App\Models\Product\Traits\ProductRelations;

class Product extends BaseModel
{
    use ProductRelations;

    protected $fillable = [
        'title',
        'description',
        'price',
        'SKU',
        'category_id'
    ];
}
