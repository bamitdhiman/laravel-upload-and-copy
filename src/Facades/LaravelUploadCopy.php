<?php

namespace Bamit\LaravelUploadCopy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bamit\LaravelUploadCopy\LaravelUploadCopy
 */
class LaravelUploadCopy extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Bamit\LaravelUploadCopy\LaravelUploadCopy::class;
    }
}
