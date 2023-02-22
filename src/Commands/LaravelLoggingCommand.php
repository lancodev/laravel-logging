<?php

namespace Lancodev\LaravelLogging\Commands;

use Illuminate\Console\Command;

class LaravelLoggingCommand extends Command
{
    public $signature = 'laravel-logging';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
