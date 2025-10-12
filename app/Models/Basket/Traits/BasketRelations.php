<?php

namespace App\Models\Basket\Traits;


use App\Models\BasketItem\BasketItem;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait BasketRelations
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(BasketItem::class);
    }
}

