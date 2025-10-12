<?php

namespace App\Models\User\Traits;

use App\Models\Basket\Basket;
use App\Models\File\File;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait UserRelations
{
    public function avatar(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'avatar');
    }

    public function basket(): HasOne
    {
        return $this->hasOne(Basket::class);
    }
}
