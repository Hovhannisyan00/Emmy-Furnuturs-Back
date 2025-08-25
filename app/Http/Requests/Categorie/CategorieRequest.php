<?php

namespace App\Http\Requests\Categorie;

use Illuminate\Foundation\Http\FormRequest;

class CategorieRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string_with_max',
            'description' =>'nullable',
        ];
    }
}
