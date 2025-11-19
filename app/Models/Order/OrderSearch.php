<?php

namespace App\Models\Order;

use App\Models\Base\Search;
use Illuminate\Database\Eloquent\Builder;

class OrderSearch extends Search
{
    protected array $orderables = [
        'id',
        'order_number',
        'total',
        'status',
        'created_at',
        'shipping_email',
        'shipping_phone',
    ];

    protected function query(): Builder
    {
        $filters = $this->filters;

        return Order::select([
            'id',
            'order_number',
            'total',
            'status',
            'shipping_first_name',
            'shipping_last_name',
            'shipping_email',
            'shipping_phone',
            'created_at',
        ])
            ->when(!empty($filters['search']), function ($query) use ($filters) {
                $query->likeOr([
                    'id',
                    'order_number',
                    'status',
                    'shipping_first_name',
                    'shipping_last_name',
                    'shipping_email',
                    'shipping_phone'
                ], $filters);
            })
            ->when(!empty($filters['id']), function ($query) use ($filters) {
                $query->where('id', $filters['id']);
            })
            ->when(!empty($filters['status']), function ($query) use ($filters) {
                $query->like('status', $filters['status']);
            })
            ->when(!empty($filters['order_number']), function ($query) use ($filters) {
                $query->like('order_number', $filters['order_number']);
            })
            ->when(!empty($filters['shipping_email']), function ($query) use ($filters) {
                $query->like('shipping_email', $filters['shipping_email']);
            })
            ->when(!empty($filters['shipping_phone']), function ($query) use ($filters) {
                $query->like('shipping_phone', $filters['shipping_phone']);
            });
    }

    public function totalCount(): int
    {
        return Order::count();
    }
}
