<?php

namespace App\Services\Gallery;

use App\Contracts\Gallery\IGalleryRepository;
use App\Services\BaseService;

class GalleryService extends BaseService
{
    public function __construct(
        IGalleryRepository $repository
    ) {
        $this->repository = $repository;
    }
}
