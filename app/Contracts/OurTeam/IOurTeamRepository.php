<?php

namespace App\Contracts\OurTeam;

interface IOurTeamRepository
{

    public function getLatestMembers(): array;
}
