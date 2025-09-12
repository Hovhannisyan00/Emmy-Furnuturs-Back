<?php

namespace App\Http\Requests\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string_with_max'
        ];
    }
}
