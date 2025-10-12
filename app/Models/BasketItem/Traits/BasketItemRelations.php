<?php

namespace App\Models\BasketItem\Traits;


use App\Models\Basket\Basket;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BasketItemRelations
{
    public function basket(): BelongsTo
    {
        return $this->belongsTo(Basket::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

