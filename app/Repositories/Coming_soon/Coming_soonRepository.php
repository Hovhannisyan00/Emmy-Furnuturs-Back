<?php

namespace App\Repositories\Coming_soon;

use App\Contracts\Coming_soon\IComing_soonRepository;
use App\Repositories\BaseRepository;
use App\Models\Coming_soon\Coming_soon;

class Coming_soonRepository extends BaseRepository implements IComing_soonRepository
{
    public function __construct(Coming_soon $model)
    {
        parent::__construct($model);
    }
}
