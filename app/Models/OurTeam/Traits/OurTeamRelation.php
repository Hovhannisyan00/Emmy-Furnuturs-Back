<?php

namespace App\Models\OurTeam\Traits;

use App\Models\File\File;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait OurTeamRelation
{
    public function photo(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('field_name', 'photo');
    }
}
