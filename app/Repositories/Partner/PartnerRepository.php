<?php

namespace App\Repositories\Partner;

use App\Contracts\Partner\IPartnerRepository;
use App\Repositories\BaseRepository;
use App\Models\Partner\Partner;

class PartnerRepository extends BaseRepository implements IPartnerRepository
{
    public function __construct(Partner $model)
    {
        parent::__construct($model);
    }
}
