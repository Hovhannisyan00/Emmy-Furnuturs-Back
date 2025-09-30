<?php

namespace App\Services\Banner;

use App\Contracts\Banner\IBannerRepository;
use App\Services\BaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BannerService extends BaseService
{
    public function __construct(
        IBannerRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function update(array $data, ?int $id = null): Model
    {
        return DB::transaction(function () use ($id, $data) {
            $banner = $this->repository->update($id, $data);
            $this->fileService->storeFile($banner, $data);

            return $banner;
        });
    }
}
