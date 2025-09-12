<?php

namespace App\Services\Coming_soon;

use App\Contracts\Coming_soon\IComing_soonRepository;
use App\Services\BaseService;

class Coming_soonService extends BaseService
{
    public function __construct(
        IComing_soonRepository $repository
    ) {
        $this->repository = $repository;
    }
}
