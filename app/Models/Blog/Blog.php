<?php

namespace App\Models\Blog;

use App\Models\Base\BaseModel;
use App\Models\Blog\Traits\BlogRelation;

class Blog extends BaseModel
{
    use BlogRelation;

    protected $fillable = [
        'name',
        'shortDescription',
        'description',
        'photo',
        'is_active',
    ];
}
