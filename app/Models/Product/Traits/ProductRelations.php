<?php

namespace App\Models\Product\Traits;

use App\Models\Categorie\Categorie;
use App\Models\File\File;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait ProductRelations
{
    public function categories(): BelongsTo
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }

    public function photo(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo');
    }
}

