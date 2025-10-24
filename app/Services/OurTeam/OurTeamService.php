<?php

namespace App\Services\OurTeam;

use App\Contracts\OurTeam\IOurTeamRepository;
use App\Services\BaseService;
use App\Services\File\FileService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OurTeamService extends BaseService
{
    protected FileService $fileService;

    public function __construct(
        IOurTeamRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function update(array $data, ?int $id = null): Model
    {
        return DB::transaction(function () use ($id, $data) {
            $team = $this->repository->update($id, $data);
            $this->fileService->storeFile($team, $data);

            return $team;
        });
    }
}
