<?php

use App\Models\Banner\Banner;
use App\Models\Blog\Blog;
use App\Models\File\Enums\FileType;
use App\Models\Gallery\Gallery;
use App\Models\OurTeam\OurTeam;
use App\Models\Partner\Partner;
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
        'photo1' => [
            'field_name' => 'photo1',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:10000',
        ],
        'photo2' => [
            'field_name' => 'photo2',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:10000',
        ],
        'photo3' => [
            'field_name' => 'photo3',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:10000',
        ],
        'photo4' => [
            'field_name' => 'photo4',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:10000',
        ],
    ],
    Banner::getClassName() => [
        'photo' => [
            'field_name' => 'photo',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:10000',
        ],
    ],
    Gallery::getClassName() => [
        'photo' => [
            'field_name' => 'photo',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:10000',
        ],
    ],
    Partner::getClassName() => [
        'photo' => [
            'field_name' => 'photo',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:10000',
        ]
    ],
    Blog::getClassName() => [
        'photo' => [
            'field_name' => 'photo',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:10000',
        ]
    ],
    OurTeam::getClassName() => [
        'photo' => [
            'field_name' => 'photo',
            'file_type' => FileType::IMAGE,
            'validation' => 'nullable|mimes:jpg,jpeg,png,bmp,tiff|max:10000',
        ]
    ]
];
