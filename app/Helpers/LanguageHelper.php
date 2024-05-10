<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

if (!function_exists('currentLanguageCode')) {
    function currentLanguageCode(): string
    {
        return LaravelLocalization::getCurrentLocale();
    }
}

if (!function_exists('getSupportedLocales')) {
    function getSupportedLocales(): array
    {
        return LaravelLocalization::getSupportedLanguagesKeys();
    }
}

if (!function_exists('currentLanguageName')) {
    function currentLanguageName(): string
    {
        return LaravelLocalization::getCurrentLocaleName();
    }
}

if (!function_exists('currentLanguageImg')) {
    function currentLanguageImg()
    {
        return LaravelLocalization::getSupportedLocales()[LaravelLocalization::getCurrentLocale()]['img'];
    }
}

if (!function_exists('languageDisplayName')) {
    function languageDisplayName($lang)
    {
        return LaravelLocalization::getSupportedLocales()[$lang]['displayName'];
    }
}

if (!function_exists('getTrans')) {
    function getTrans(): array
    {
        $exceptTransFile = [
            'auth',
            'pagination',
            'passwords',
            'validation',
        ];

        $langFiles = File::files(resource_path().'/lang/'.currentLanguageCode());

        $trans = [];
        foreach ($langFiles as $f) {
            $filename = pathinfo($f)['filename'];
            if (!in_array(pathinfo($f)['filename'], $exceptTransFile)) {
                $trans[$filename] = trans($filename);
            }
        }

        return $trans;
    }
}

if (!function_exists('langIconPath')) {
    function langIconPath($lang = null): string
    {
        return match ($lang) {
            'de' => '/img/germany.svg',
            'ru' => '/img/Flag_of_Russia.svg',
            'hy' => '/img/Armenia_-_Rounded_Rectangle.svg',
            default => '/img/united-states.svg'
        };
    }
}

if (!function_exists('getCurrentAlternateHref')) {
    function getCurrentAlternateHref($locale): string
    {
        $path = strstr(request()->path(), '/');

        return config('app.url').'/'.$locale.$path;
    }
}
