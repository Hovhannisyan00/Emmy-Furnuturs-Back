<?php

use App\Models\File\Enums\FileType;
use App\Models\Product\Product;
use App\Models\User\User;

return [
    User::getClassName() => [
        'signature' => [
            'field_name' => 'signature',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:4096',
            //            'multiple' => true
        ],

        'avatar' => [
            'field_name' => 'avatar',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:4096',
            'is_cropped' => true,
        ],
    ],

    Product::getClassName() => [
        'photo' => [
            'field_name' => 'photo',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:10000',
        ],
    ],
];

