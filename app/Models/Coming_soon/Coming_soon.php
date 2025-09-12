<?php

namespace App\Models\Coming_soon;

use App\Models\Base\BaseModel;

class Coming_soon extends BaseModel
{
    protected $fillable = [
        'name',
        'target_datetime',
    ];

    protected $casts = [
        'target_datetime' => 'datetime',
    ];
}
