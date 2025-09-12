<?php

namespace App\Repositories\Get_in_touch;

use App\Contracts\Get_in_touch\IGet_in_touchRepository;
use App\Repositories\BaseRepository;
use App\Models\Get_in_touch\Get_in_touch;

class Get_in_touchRepository extends BaseRepository implements IGet_in_touchRepository
{
    public function __construct(Get_in_touch $model)
    {
        parent::__construct($model);
    }
}
