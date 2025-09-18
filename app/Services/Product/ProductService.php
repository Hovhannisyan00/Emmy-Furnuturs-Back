<?php

namespace App\Services\Product;

use App\Contracts\Product\IProductRepository;
use App\Services\BaseService;
use App\Services\File\FileTempService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductService extends BaseService
{
    public function __construct(
        IProductRepository $repository,
        FileTempService $fileService,
    ) {
        $this->repository = $repository;
        $this->fileService = $fileService;
    }

    public function update(array $data, ?int $id = null): Model
    {
        return DB::transaction(function () use ($id, $data) {
            $product = $this->repository->update($id, $data);
            $this->fileService->storeFile($product, $data);

            return $product;
        });
    }
}
