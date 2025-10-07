<?php

namespace App\Models\Banner;

use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\Gallery\Traits\GalleryRelations;

class Banner extends BaseModel
{
    use HasFileData;
    use GalleryRelations;

    protected $fillable = [
        'name',
        'is_active',
    ];
}
