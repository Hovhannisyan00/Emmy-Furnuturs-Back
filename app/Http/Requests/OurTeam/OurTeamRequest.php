<?php

namespace App\Http\Requests\OurTeam;

use Illuminate\Foundation\Http\FormRequest;

class OurTeamRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'required|string_with_max',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
        ];
    }
}
