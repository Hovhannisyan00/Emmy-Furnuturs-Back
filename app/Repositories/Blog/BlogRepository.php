<?php

namespace App\Repositories\Blog;

use App\Contracts\Blog\IBlogRepository;
use App\Models\Blog\Blog;
use App\Repositories\BaseRepository;

class BlogRepository extends BaseRepository implements IBlogRepository
{
    public function __construct(Blog $model)
    {
        parent::__construct($model);
    }

    public function getBlogsData(): array
    {
        return Blog::query()
            ->where('is_active', true)
            ->latest('created_at')
            ->take(6)
            ->get()
            ->map(function ($blog) {
                return [
                    'id' => $blog->id,
                    'name' => $blog->name,
                    'shortDescription' => $blog->shortDescription,
                    'description' => $blog->description,
                    'photo' => $blog->photo ? $blog->photo->file_url : null,
                    'created_at_formatted' => $blog->created_at
                        ? $blog->created_at->format('F j, Y')
                        : null,
                ];
            })
            ->toArray();
    }
}
