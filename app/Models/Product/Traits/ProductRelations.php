<?php

namespace App\Models\Product\Traits;

use App\Models\Categorie\Categorie;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait ProductRelations
{
    public function products(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }
}