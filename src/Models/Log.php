<?php

namespace Lancodev\LaravelLogging\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $guarded = ['id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function loggable()
    {
        return $this->morphTo();
    }
}
