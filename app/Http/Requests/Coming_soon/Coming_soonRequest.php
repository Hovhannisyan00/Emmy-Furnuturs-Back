<?php

namespace App\Http\Requests\Coming_soon;

use Illuminate\Foundation\Http\FormRequest;

class Coming_soonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string_with_max',
            'target_datetime' => 'required|date',
        ];
    }
}
