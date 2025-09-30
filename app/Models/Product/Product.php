<?php

namespace App\Models\Product;

use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\Product\Traits\ProductHelperMethods;
use App\Models\Product\Traits\ProductRelations;
use App\Models\User\Traits\UserRelations;

class Product extends BaseModel
{
    use HasFileData;
    use ProductHelperMethods;
    use ProductRelations;
    use UserRelations;

    protected $fillable = [
        'name',
        'description',
        'price',
        'SKU',
        'quantity',
        'category_id',
        'discount',
    ];
}
