<?php

namespace App\Repositories\OurTeam;

use App\Contracts\OurTeam\IOurTeamRepository;
use App\Repositories\BaseRepository;
use App\Models\OurTeam\OurTeam;

class OurTeamRepository extends BaseRepository implements IOurTeamRepository
{
    public function __construct(OurTeam $model)
    {
        parent::__construct($model);
    }
}
