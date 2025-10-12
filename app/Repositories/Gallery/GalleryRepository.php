<?php

namespace App\Repositories\Gallery;

use App\Contracts\Gallery\IGalleryRepository;
use App\Models\Gallery\Gallery;
use App\Repositories\BaseRepository;

class GalleryRepository extends BaseRepository implements IGalleryRepository
{
    public function __construct(Gallery $model)
    {
        parent::__construct($model);
    }

    public function getGalleryData(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->model
            ->with(['photo'])
            ->take(6)
            ->get();
    }
}
