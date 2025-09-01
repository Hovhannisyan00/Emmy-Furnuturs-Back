<?php

namespace App\Repositories\Blog;

use App\Contracts\Blog\IBlogRepository;
use App\Repositories\BaseRepository;
use App\Models\Blog\Blog;

class BlogRepository extends BaseRepository implements IBlogRepository
{
    public function __construct(Blog $model)
    {
        parent::__construct($model);
    }
}
