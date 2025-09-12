<?php

namespace App\Http\Requests\Coming_soon;

use App\Http\Requests\Core\DatatableSearchRequest;

class Coming_soonSearchRequest extends DatatableSearchRequest
{
    public function rules(): array
    {
        return parent::rules() + [
                'f.id' => 'nullable|integer_with_max',
                'f.name' => 'nullable|string_with_max',
            ];
    }
}
