<?php

namespace App\Http\Requests\Get_in_touch;

use Illuminate\Foundation\Http\FormRequest;

class Get_in_touchRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:50',
            'last_name' => 'nullable|string|max:50',
            'email' => 'required|string|email|max:60',
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string|max:5000',
            'photo' => 'nullable|string_with_max'
        ];
    }
}
