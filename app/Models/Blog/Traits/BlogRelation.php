<?php

namespace App\Models\Blog\Traits;

use App\Models\File\File;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait BlogRelation
{
    public function photo(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo');
    }
}
