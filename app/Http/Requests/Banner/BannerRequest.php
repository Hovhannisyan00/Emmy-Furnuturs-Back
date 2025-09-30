<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string_with_max',
            'photo' => 'nullable|string_with_max',
            'is_active' => 'nullable|boolean'
        ];
    }

    protected function prepareForValidation(): void
    {
        if (!$this->has('is_active')) {
            $this->merge([
                'is_active' => 0
            ]);
        }
    }
}
