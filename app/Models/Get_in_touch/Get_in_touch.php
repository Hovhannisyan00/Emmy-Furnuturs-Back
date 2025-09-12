<?php

namespace App\Models\Get_in_touch;

use App\Models\Base\BaseModel;

class Get_in_touch extends BaseModel
{
    protected $table = 'get_in_touches';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'message',
    ];
}
