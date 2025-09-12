<?php

namespace App\Repositories\Gallery;

use App\Contracts\Gallery\IGalleryRepository;
use App\Repositories\BaseRepository;
use App\Models\Gallery\Gallery;

class GalleryRepository extends BaseRepository implements IGalleryRepository
{
    public function __construct(Gallery $model)
    {
        parent::__construct($model);
    }
}
