<?php

namespace App\Models\Gallery;

use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\Gallery\Traits\GalleryRelations;

class Gallery extends BaseModel
{
    use GalleryRelations;
    use HasFileData;

    protected $fillable = [
        'name',
    ];
}
