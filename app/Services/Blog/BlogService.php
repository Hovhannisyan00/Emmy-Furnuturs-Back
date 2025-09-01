<?php

namespace App\Services\Blog;

use App\Contracts\Blog\IBlogRepository;
use App\Services\BaseService;

class BlogService extends BaseService
{
    public function __construct(
        IBlogRepository $repository
    ) {
        $this->repository = $repository;
    }
}
