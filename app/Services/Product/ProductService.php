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

    public function createOrUpdate(array $data, ?int $id = null): Model
    {
        return DB::transaction(function () use ($data, $id) {

            if (empty($data['price']) && !empty($data['sizes'])) {
                $data['price'] = $data['sizes'][0]['price'];
            }

            $model = $this->createOrUpdateWithoutTransaction($data, $id);

            if (!empty($data['sizes']) && method_exists($model, 'sizes')) {
                if ($id) {
                    $model->sizes()->delete();
                }
                $model->sizes()->createMany($data['sizes']);
            }

            return $model;
        });
    }

    public function getViewData(?int $id = null): array
    {
        // Create Mode
        if ($id === null) {
            $model = $this->repository->getInstance();

            return [
                $model::getClassNameCamelCase() => $model,
                'sizes' => [],
            ];
        }

        // Edit Mode
        $model = $this->repository->find($id);
        $variableKey = $model::getClassNameCamelCase();

        $data = [
            $variableKey => $model,
            'sizes' => $model->sizes->map(function ($size) {
                return [
                    'id' => $size->id,
                    'size' => $size->size,
                    'price' => $size->price,
                ];
            })->toArray(),
        ];

        if ($model->mls) {
            $data["{$variableKey}Ml"] = $model->mls->keyBy('lng_code');
        }

        return $data;
    }
}
