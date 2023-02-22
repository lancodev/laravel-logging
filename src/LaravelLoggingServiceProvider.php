<?php

namespace Lancodev\LaravelLogging;

use Lancodev\LaravelLogging\Commands\LaravelLoggingCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelLoggingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-logging')
            ->hasMigrations(['create_logging_table'])
            ->runsMigrations();
    }
}
