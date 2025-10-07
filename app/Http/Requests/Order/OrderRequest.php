<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'status' => 'required|string_with_max',
            'total' => 'required|numeric|min:0',
        ];
    }
}
