<?php

namespace App\Models\Product;

use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\File\File;
use App\Models\Product\Traits\ProductRelations;
use App\Models\User\Traits\UserRelations;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Product\Traits\ProductHelperMethods;

class Product extends BaseModel
{
    use HasFileData;
    use ProductRelations;
    use UserRelations;
    use ProductHelperMethods;

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
