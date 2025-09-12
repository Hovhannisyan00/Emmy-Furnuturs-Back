<?php

namespace App\Models\Blog;

use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\Blog\Traits\BlogRelation;

class Blog extends BaseModel
{
    use BlogRelation;
    use HasFileData;

    protected $fillable = [
        'name',
        'shortDescription',
        'description',
        'photo',
        'is_active',
    ];
}
