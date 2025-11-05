<?php

namespace App\Models\History;

use App\Models\Base\Search;
use Illuminate\Database\Eloquent\Builder;

class HistorySearch extends Search
{
    protected array $orderables = [
        'id',
        'name',
        'description',
        'year'
    ];

    protected function query(): Builder
    {
        $filters = $this->filters;

        return History::select([
            'id',
            'name',
            'description',
            'year'
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
        return History::count();
    }
}
