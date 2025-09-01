<?php

namespace App\Services\OurTeam;

use App\Contracts\OurTeam\IOurTeamRepository;
use App\Services\BaseService;

class OurTeamService extends BaseService
{
    public function __construct(
        IOurTeamRepository $repository
    ) {
        $this->repository = $repository;
    }
}
