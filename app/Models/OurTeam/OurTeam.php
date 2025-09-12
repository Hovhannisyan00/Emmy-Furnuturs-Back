<?php

namespace App\Models\OurTeam;

use App\Models\Base\BaseModel;
use App\Models\Base\Traits\HasFileData;
use App\Models\OurTeam\Traits\OurTeamRelation;

class OurTeam extends BaseModel
{
    use OurTeamRelation;
    use HasFileData;

    protected $table = 'our_teams';

    protected $fillable = [
        'name',
        'position',
        'photo',
        'email',
        'phone',
    ];
}
