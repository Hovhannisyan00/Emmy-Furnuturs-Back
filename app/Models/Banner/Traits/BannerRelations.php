<?php

namespace App\Models\Banner\Traits;

use App\Models\File\File;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait BannerRelations
{
    public function photo(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo');
    }
}
