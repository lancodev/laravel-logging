<?php

namespace Lancodev\LaravelLogging\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lancodev\LaravelLogging\LaravelLogging
 */
class LaravelLogging extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Lancodev\LaravelLogging\LaravelLogging::class;
    }
}
