<?php

namespace App\Services\Get_in_touch;

use App\Contracts\Get_in_touch\IGet_in_touchRepository;
use App\Services\BaseService;
use App\Services\File\FileService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Get_in_touchService extends BaseService
{
    protected FileService $fileService;

    public function __construct(
        IGet_in_touchRepository $repository
    ) {
        $this->repository = $repository;
    }
    public function update(array $data, ?int $id = null): Model
    {
        return DB::transaction(function () use ($id, $data) {
            $gtInTch = $this->repository->update($id, $data);
            $this->fileService->storeFile($gtInTch, $data);

            return $gtInTch;
        });
    }
}
