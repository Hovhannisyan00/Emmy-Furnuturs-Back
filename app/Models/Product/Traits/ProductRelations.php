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

    public function photo1(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo1');
    }

    public function photo2(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo2');
    }

    public function photo3(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo3');
    }

    public function photo4(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo4');
    }
}

