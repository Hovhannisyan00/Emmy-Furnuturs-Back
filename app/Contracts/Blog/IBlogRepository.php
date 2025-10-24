<?php

namespace App\Contracts\Blog;

use Illuminate\Database\Eloquent\Collection;

interface IBlogRepository
{
    public function getBlogsData(): array;
}
