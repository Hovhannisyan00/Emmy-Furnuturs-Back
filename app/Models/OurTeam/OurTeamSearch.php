<?php

namespace App\Models\OurTeam;

use App\Models\Base\Search;
use Illuminate\Database\Eloquent\Builder;

class OurTeamSearch extends Search
{
    protected array $orderables = [
        'id',
        'name'
    ];

    protected function query(): Builder
    {
        $filters = $this->filters;

        return OurTeam::select([
            'id',
            'name',
            'position',
            'email',
            'phone',
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
        return OurTeam::count();
    }
}
