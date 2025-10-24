<?php

namespace App\Repositories\OurTeam;

use App\Contracts\OurTeam\IOurTeamRepository;
use App\Models\OurTeam\OurTeam;
use App\Repositories\BaseRepository;

class OurTeamRepository extends BaseRepository implements IOurTeamRepository
{
    public function __construct(OurTeam $model)
    {
        parent::__construct($model);
    }

    public function getLatestMembers(): array
    {
        return OurTeam::select('id', 'name', 'position')
            ->orderBy('id', 'asc')
            ->get()
            ->map(function ($member) {
                return [
                    'id' => $member->id,
                    'name' => $member->name,
                    'photo' => $member->photo ? $member->photo->file_url : null,
                    'email' => $member->email,
                    'position' => $member->position,
                ];
            })
            ->values()
            ->toArray();
    }
}
