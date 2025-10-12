<?php

namespace App\Http\Controllers\Web\Gallery;

use App\Contracts\Gallery\IGalleryRepository;
use App\Http\Controllers\Controller;
use App\Services\Gallery\GalleryService;
use Illuminate\Database\Eloquent\Collection;

class GalleryController extends Controller
{
    public function __construct(
        GalleryService $service,
        IGalleryRepository $repository,
    ) {
        $this->service = $service;
        $this->repository = $repository;
    }

    public function getListData():  Collection
    {
        return $this->repository->getGalleryData();


    }
}
