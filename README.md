# Laravel Contentful Package

[![Latest Version](https://img.shields.io/packagist/v/dansmaculotte/laravel-contentful.svg?style=flat-square)](https://packagist.org/packages/dansmaculotte/laravel-contentful)
[![Total Downloads](https://img.shields.io/packagist/dt/dansmaculotte/laravel-contentful.svg?style=flat-square)](https://packagist.org/packages/dansmaculotte/laravel-contentful)
[![Build Status](https://img.shields.io/travis/dansmaculotte/laravel-contentful/master.svg?style=flat-square)](https://travis-ci.org/dansmaculotte/laravel-contentful)
[![Quality Score](https://img.shields.io/scrutinizer/g/DansMaCulotte/laravel-contentful.svg?style=flat-square)](https://scrutinizer-ci.com/g/dansmaculotte/laravel-contentful)
[![Code Coverage](https://img.shields.io/coveralls/github/dansmaculotte/laravel-contentful.svg?style=flat-square)](https://coveralls.io/github/dansmaculotte/laravel-contentful)

> This library provides an easy-to-use integration between the Laravel framework and the Contentful Delivery SDK.

## Installation

### Requirements

- PHP 7.2

You can install the package via composer:

```bash
composer require dansmaculotte/laravel-contentful
```

The package will automatically register itself.

To publish the config file to config/contentful.php run:

```php
php artisan vendor:publish --provider="DansMaCulotte\Contentful\ContentfulServiceProvider"
```

## Usage

Configure your contentful delivery token and space id in `config/contenful.php`.

## What is Contentful?

[Contentful](https://www.contentful.com) provides a content infrastructure for digital teams to power content in websites, apps, and devices. Unlike a CMS, Contentful was built to integrate with the modern software stack. It offers a central hub for structured content, powerful management and delivery APIs, and a customizable web app that enable developers and content creators to ship digital products faster.



### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
