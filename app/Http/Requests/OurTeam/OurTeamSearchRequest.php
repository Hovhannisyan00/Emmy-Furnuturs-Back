<?php

namespace App\Http\Requests\OurTeam;

use App\Http\Requests\Core\DatatableSearchRequest;

class OurTeamSearchRequest extends DatatableSearchRequest
{
    public function rules(): array
    {
        return parent::rules() + [
                'f.id' => 'nullable|integer_with_max',
                'f.name' => 'nullable|string_with_max',
            ];
    }
}
