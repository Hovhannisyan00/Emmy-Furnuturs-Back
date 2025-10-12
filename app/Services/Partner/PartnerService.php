<?php

namespace App\Services\Partner;

use App\Contracts\Partner\IPartnerRepository;
use App\Services\BaseService;
use App\Services\File\FileService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PartnerService extends BaseService
{
    protected FileService $fileService;

    public function __construct(
        IPartnerRepository $repository
    ) {
        $this->repository = $repository;
    }
    public function update(array $data, ?int $id = null): Model
    {
        return DB::transaction(function () use ($id, $data) {
            $partner = $this->repository->update($id, $data);
            $this->fileService->storeFile($partner, $data);

            return $partner;
        });
    }
}
