<?php

namespace Lancodev\LaravelLogging\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Lancodev\LaravelLogging\LaravelLoggingServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Lancodev\\LaravelLogging\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelLoggingServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-logging_table.php.stub';
        $migration->up();
        */
    }
}
