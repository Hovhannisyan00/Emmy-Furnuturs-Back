<?php

namespace App\Contracts\Gallery;

use Illuminate\Database\Eloquent\Collection;

interface IGalleryRepository
{
    public function getGalleryData(): Collection;
}
