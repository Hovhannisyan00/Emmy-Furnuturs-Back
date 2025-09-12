<?php

namespace App\Http\Requests\Gallery;

use Illuminate\Foundation\Http\FormRequest;

class GalleryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string_with_max'
        ];
    }
}
