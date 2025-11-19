<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return array_merge(
            $this->baseRules(),
            $this->photoRules(),
            $this->sizeRules()
        );
    }

    private function baseRules(): array
    {
        return [
            'name' => 'required|string_with_max',
            'quantity' => 'required|numeric|min:0',
            'SKU' => 'nullable|string_with_max',
            'description' => 'nullable',
            'category_id' => 'nullable|integer|exists:categories,id',
            'discount' => 'nullable|numeric|min:0',
        ];
    }

    private function photoRules(): array
    {
        $rules = [];
        for ($i = 1; $i <= 48; ++$i) {
            $rules["photo{$i}"] = 'nullable|string_with_max';
        }

        return $rules;
    }

    private function sizeRules(): array
    {
        return [
            'sizes' => 'nullable|array|max:8',
            'sizes.*.size' => 'required|string_with_max',
            'sizes.*.price' => 'required|numeric|min:0',
        ];
    }

    public function attributes(): array
    {
        $attributes = [
            'name' => 'name',
            'price' => 'price',
            'quantity' => 'quantity',
            'SKU' => 'SKU',
            'description' => 'description',
            'category_id' => 'category',
            'discount' => 'discount',
            'sizes' => 'sizes',
            'sizes.*.size' => 'size',
            'sizes.*.price' => 'size price',
        ];

        for ($i = 1; $i <= 48; ++$i) {
            $attributes["photo{$i}"] = "Photo {$i}";
        }

        return $attributes;
    }

    public function authorize(): bool
    {
        return true;
    }
}
