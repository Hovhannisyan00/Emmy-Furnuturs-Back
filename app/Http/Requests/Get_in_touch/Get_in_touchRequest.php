<?php

namespace App\Http\Requests\Get_in_touch;

use Illuminate\Foundation\Http\FormRequest;

class Get_in_touchRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|string|email|max:60',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:5000',
        ];
    }
}
