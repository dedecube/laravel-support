# Dedecube - laravel-support

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dedecube/laravel-support.svg?style=flat-square)](https://packagist.org/packages/dedecube/laravel-support)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/dedecube/laravel-support/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/dedecube/laravel-support/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/dedecube/laravel-support/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/dedecube/laravel-support/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/dedecube/laravel-support.svg?style=flat-square)](https://packagist.org/packages/dedecube/laravel-support)

Provide some support for laravel projects.

## Installation

You can install the package via composer:

```bash
composer require dedecube/laravel-support
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="dedecube-support-config"
```

This is the contents of the published config file:

## Usage

```php
$support = new Dedecube\Support();
echo $support->echoPhrase('Hello, Dedecube!');
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

- [dedecube](https://github.com/dedecube)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
