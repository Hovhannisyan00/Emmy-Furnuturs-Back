<?php

namespace App\Models\Blog;

use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\Blog\Traits\BlogRelation;

class Blog extends BaseModel
{
    use HasFileData;
    use BlogRelation;

    protected $fillable = [
        'name',
        'shortDescription',
        'description',
        'is_active',
    ];
}
