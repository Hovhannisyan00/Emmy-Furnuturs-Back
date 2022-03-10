<?php

namespace App\Http\Requests\File;

use Illuminate\Foundation\Http\FormRequest;

class FileUploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $configKey = $this->input('config_key');
        $config = config("files.$configKey");
        $isCropped = $config['is_cropped'] ?? false;

        if ($isCropped) {

            return [
                'file' => 'required|string|max:200000',
                'name' => 'required|string_with_max',
                'config_key' => 'required|string_with_max'
            ];

        } else {

            return [
                'file' => $config['validation'],
                'config_key' => 'required|string_with_max'
            ];

        }
    }
}
