<?php

namespace App\Services\Banner;

use App\Contracts\Banner\IBannerRepository;
use App\Services\BaseService;

class BannerService extends BaseService
{
    public function __construct(
        IBannerRepository $repository
    ) {
        $this->repository = $repository;
    }
}
