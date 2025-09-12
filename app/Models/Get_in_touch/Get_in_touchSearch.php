<?php

namespace App\Models\Get_in_touch;

use App\Models\Base\Search;
use Illuminate\Database\Eloquent\Builder;

class Get_in_touchSearch extends Search
{
    protected array $orderables = [
        'id',
        'name'
    ];

    protected function query(): Builder
    {
        $filters = $this->filters;

        return Get_in_touch::select([
            'id',
            'first_name',
            'last_name',
            'email',
            'phone',
            'message',
        ])
            ->when(!empty($filters['search']), function ($query) use ($filters) {
                $query->likeOr(['id', 'name'], $filters);
            })
            ->when(!empty($filters['id']), function ($query) use ($filters) {
                $query->where('id', $filters['id']);
            })
            ->when(!empty($filters['name']), function ($query) use ($filters) {
                $query->like('name', $filters['name']);
            });
    }

    public function totalCount(): int
    {
        return Get_in_touch::count();
    }
}
