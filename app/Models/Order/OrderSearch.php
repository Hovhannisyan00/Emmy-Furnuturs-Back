<?php

namespace App\Models\Order;

use App\Models\Base\Search;
use Illuminate\Database\Eloquent\Builder;

class OrderSearch extends Search
{
    protected array $orderables = [
        'id',
        'total',
        'status',
    ];

    protected function query(): Builder
    {
        $filters = $this->filters;

        return Order::select([
            'id',
            'total',
            'status',
        ])
            ->when(!empty($filters['search']), function ($query) use ($filters) {
                $query->likeOr(['id', 'status'], $filters);
            })
            ->when(!empty($filters['id']), function ($query) use ($filters) {
                $query->where('id', $filters['id']);
            })
            ->when(!empty($filters['status']), function ($query) use ($filters) {
                $query->like('status', $filters['status']);
            });
    }

    public function totalCount(): int
    {
        return Order::count();
    }
}
