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
        'SKU',
        'quantity',
        'category_id',
        'discount',
        'price',
    ];

    protected $appends = ['old_price'];

    public function getOldPriceAttribute(): ?float
    {
        if (!$this->discount) {
            return null;
        }

        return $this->price + $this->discount;
    }

    public function getCategoryNameAttribute(): string
    {
        if ($this->relationLoaded('categories') && $this->categories) {
            return $this->categories->name;
        }
        return 'Категория не выбрана';
    }
}
