<?php

namespace App\Models\History;

use App\Models\Base\BaseModel;

class History extends BaseModel
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'year'
    ];
}
