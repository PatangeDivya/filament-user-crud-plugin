# This is my package filament-user-crud-plugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/patangedivya/filament-user-crud-plugin.svg?style=flat-square)](https://packagist.org/packages/patangedivya/filament-user-crud-plugin)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/patangedivya/filament-user-crud-plugin/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/patangedivya/filament-user-crud-plugin/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/patangedivya/filament-user-crud-plugin/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/patangedivya/filament-user-crud-plugin/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/patangedivya/filament-user-crud-plugin.svg?style=flat-square)](https://packagist.org/packages/patangedivya/filament-user-crud-plugin)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require patangedivya/filament-user-crud-plugin
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-user-crud-plugin-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-user-crud-plugin-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-user-crud-plugin-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentUserCrudPlugin = new PatangeDivya\FilamentUserCrudPlugin();
echo $filamentUserCrudPlugin->echoPhrase('Hello, PatangeDivya!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Divya Patange](https://github.com/PatangeDivya)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
