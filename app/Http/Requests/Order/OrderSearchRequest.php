<?php

namespace App\Http\Requests\Order;

use App\Http\Requests\Core\DatatableSearchRequest;

class OrderSearchRequest extends DatatableSearchRequest
{
    public function rules(): array
    {
        return parent::rules() + [
                'f.id' => 'nullable|integer_with_max',
                'f.name' => 'nullable|string_with_max',
            ];
    }
}
