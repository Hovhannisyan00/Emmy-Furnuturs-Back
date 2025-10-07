<?php

namespace App\Services\Partner;

use App\Contracts\Partner\IPartnerRepository;
use App\Services\BaseService;

class PartnerService extends BaseService
{
    public function __construct(
        IPartnerRepository $repository
    ) {
        $this->repository = $repository;
    }
}
