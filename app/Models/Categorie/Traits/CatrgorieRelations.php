<?php

namespace App\Models\Categorie\Traits;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait CatrgorieRelations
{
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
