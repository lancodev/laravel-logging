# Laravel Logging

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lancodev/laravel-logging.svg?style=flat-square)](https://packagist.org/packages/lancodev/laravel-logging)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/lancodev/laravel-logging/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/lancodev/laravel-logging/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/lancodev/laravel-logging/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/lancodev/laravel-logging/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lancodev/laravel-logging.svg?style=flat-square)](https://packagist.org/packages/lancodev/laravel-logging)

This package provides a simple way to log events to a database table. It provides a convenient `Loggable` Trait to allow you to link your logs to a model. It also provides a `Log` model that you can use to query your logs.

## Installation

You can install the package via composer:

```bash
composer require lancodev/laravel-logging
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-logging-migrations"
php artisan migrate
```

## Usage
Add the `Loggable` Trait to your model(s) that you want to log events for.

Then, you can create logs for the model using the `logs` relationship:

```php
$model->logs()->create([
    'type' => 'Info',
    'log' => 'lorem ipsum',
]);
```

To view logs for a given model, you can use the `logs` relationship:

```php
$model->logs;
```

Or use standard Eloquent query language to filter the logs by type, etc:

```php
$model->logs()->where('type', 'Info')->get();

Lancodev\LaravelLogging\Models\Log {
  id: 1,
  loggable_type: "App\Models\{SOME_MODEL}",
  loggable_id: 1,
  type: "Info",
  log: "lorem ipsum",
  created_at: "2023-01-01 00:00:00",
  updated_at: "2023-01-01 00:00:00",
},
```

The `Log` model also has a `loggable` relationship that allows you to access the model that the log belongs to:

```php
$log->loggable;****
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kyle Anderson](https://github.com/lancodev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
