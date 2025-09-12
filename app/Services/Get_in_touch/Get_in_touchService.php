<?php

namespace App\Services\Get_in_touch;

use App\Contracts\Get_in_touch\IGet_in_touchRepository;
use App\Services\BaseService;

class Get_in_touchService extends BaseService
{
    public function __construct(
        IGet_in_touchRepository $repository
    ) {
        $this->repository = $repository;
    }
}
