<?php

namespace App\Models\Gallery\Traits;

use App\Models\File\File;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait GalleryRelations
{
    public function photo(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo');
    }
}
