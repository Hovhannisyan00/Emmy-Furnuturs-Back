<?php

namespace App\Services\Blog;

use App\Contracts\Blog\IBlogRepository;
use App\Services\BaseService;
use App\Services\File\FileService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogService extends BaseService
{
    protected FileService $fileService;

    public function __construct(
        IBlogRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function update(array $data, ?int $id = null): Model
    {
        return DB::transaction(function () use ($id, $data) {
            $blog = $this->repository->update($id, $data);
            $this->fileService->storeFile($blog, $data);

            return $blog;
        });
    }
}
