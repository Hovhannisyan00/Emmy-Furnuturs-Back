<?php

namespace App\Http\Requests\Get_in_touch;

use App\Http\Requests\Core\DatatableSearchRequest;

class Get_in_touchSearchRequest extends DatatableSearchRequest
{
    public function rules(): array
    {
        return parent::rules() + [
                'f.id' => 'nullable|integer_with_max',
                'f.name' => 'nullable|string_with_max',
            ];
    }
}
