<?php

namespace App\Repositories\Banner;

use App\Contracts\Banner\IBannerRepository;
use App\Repositories\BaseRepository;
use App\Models\Banner\Banner;

class BannerRepository extends BaseRepository implements IBannerRepository
{
    public function __construct(Banner $model)
    {
        parent::__construct($model);
    }
}
