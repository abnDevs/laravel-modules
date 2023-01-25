# Laravel-Modules

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nwidart/laravel-modules.svg?style=flat-square)](https://packagist.org/packages/nwidart/laravel-modules)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/nWidart/laravel-modules/master.svg?style=flat-square)](https://travis-ci.org/nWidart/laravel-modules)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/nWidart/laravel-modules.svg?maxAge=86400&style=flat-square)](https://scrutinizer-ci.com/g/nWidart/laravel-modules/?branch=master)
[![Quality Score](https://img.shields.io/scrutinizer/g/nWidart/laravel-modules.svg?style=flat-square)](https://scrutinizer-ci.com/g/nWidart/laravel-modules)
[![Total Downloads](https://img.shields.io/packagist/dt/nwidart/laravel-modules.svg?style=flat-square)](https://packagist.org/packages/nwidart/laravel-modules)

| **Laravel**  | **laravel-modules** |
|---|---------------------|
| 9.0  | ^1.0                |

## Install

To install through Composer, by run the following command:

``` bash
composer require abndevs/laravel-modules
```

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider="AbnDevs\Modules\LaravelModulesServiceProvider"
```

### Autoloading

By default, the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example:

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/",
      "Database\\Factories\\": "database/factories/",
      "Database\\Seeders\\": "database/seeders/"
  }

}
```

**Tip: don't forget to run `composer dump-autoload` afterwards.**

## Documentation

You'll find installation instructions and full documentation on [https://docs.laravelmodules.com/](https://docs.laravelmodules.com/).

## Credits

- [Bishwajit Adhikary](https://github.com/bishwajitcadhikary@gmail.com)
- [Nicolas Widart](https://github.com/nwidart)
- [David Carr](https://github.com/dcblogdev)
- [gravitano](https://github.com/gravitano)
- [All Contributors](../../contributors)

## About Bishwajit Adhikary

Bishwajit Adhikary is a freelance web developer specialising on the Laravel framework. View all my packages [on my website](https://github.com/bishwajitcadhikary/).


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
