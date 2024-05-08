<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class MetaData
 *
 * @mixin \App\MetaData\MetaData
 *
 * @package App\Facades
 */
class MetaData extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \App\MetaData\MetaData::class;
    }
}
