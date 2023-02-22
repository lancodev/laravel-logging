<?php

namespace Lancodev\LaravelLogging\Traits;

use Lancodev\LaravelLogging\Models\Log;

trait Loggable
{
    public function logs()
    {
        return $this->morphMany(Log::class, 'loggable');
    }
}
