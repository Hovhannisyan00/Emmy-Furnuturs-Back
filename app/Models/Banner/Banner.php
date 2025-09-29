<?php

namespace App\Models\Banner;

use App\Models\Base\BaseModel;

class Banner extends BaseModel
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'is_active',
    ];
}
