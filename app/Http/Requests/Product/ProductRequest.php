<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string_with_max',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'SKU' => 'nullable|string_with_max',
            'description' => 'nullable|string_with_max',
            'category_id' => 'nullable|integer|exists:categories,id',
        ];
    }
}
