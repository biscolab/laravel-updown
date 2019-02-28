# Laravel UpDown
UpDown.io package for Laravel 5

[![Build Status](https://travis-ci.org/biscolab/laravel-updown.svg?branch=master)](https://travis-ci.org/biscolab/laravel-updown)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/biscolab/laravel-updown/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/biscolab/laravel-updown/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/biscolab/laravel-updown/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/biscolab/laravel-updown/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/biscolab/laravel-updown/badges/build.png?b=master)](https://scrutinizer-ci.com/g/biscolab/laravel-updown/build-status/master)
[![Packagist](https://img.shields.io/packagist/l/biscolab/laravel-updown.svg)](https://packagist.org/packages/biscolab/laravel-updown)
[![Packagist](https://img.shields.io/packagist/v/biscolab/laravel-updown.svg)](https://packagist.org/packages/biscolab/laravel-updown)

## Installation

You can install the package via composer:
```sh
composer require biscolab/laravel-updown:^1.0
```

Laravel 5.5 (or greater) uses package auto-discovery, so doesn't require you to manually add the Service Provider, but if you don't use auto-discovery UpDownServiceProvider must be registered in config/app.php:
The service **provider** must be registered in `config/app.php`:
```php
'providers' => [
    ...
    Biscolab\LaravelUpDown\UpDownServiceProvider::class,
];
```
You can use the facade for shorter code. Add "UpDown" to your aliases:
```php
'aliases' => [
    ...
    'UpDown' => Biscolab\LaravelUpDown\Facades\UpDown::class,
];
```

## Configuration

### Add your API Keys
Open .env file and set UPDOWN_API_KEY:
```php
UPDOWN_API_KEY=<YOUR_UPDOWN_API_KEY>
```
now refresh Laravel cache

```sh
php artisan config:cache
```
You can also create `config/updown.php` configuration file using:
```su
php artisan vendor:publish --provider="Biscolab\LaravelUpDown\UpDownServiceProvider"
```

Open `config/updown.php` configuration file and set `api_key` if you do not want to set it in `.env` file:
```php
return [
    'api_key' => env('UPDOWN_API_KEY', ''),       
];
```

Further info about updown.io service [here](https://updown-sdk.biscolab.com/)

## How to use

This package uses `biscolab/updown-php-sdk`. First of all I suggest you to become familiar with that <a href="https://updown-sdk.biscolab.com/" target="_blank">here</a> and with <a href="https://updown.io/api" target="_blank">updown.io official documentation</a>

### Helper
```php
updown();
```
`updown()` helper returns an `UpDownBuilder` instance containing yhe UpDown object created with your `UPDOWN_API_KEY

### Use objects
To call objects you just have to call the homonymous method:

```php
// List all Checks: returns a Checks collection
// Empty Check instance
$checks = updown()->Check()->all();

// Check instance initialized with "xxxx" token
$check = updown()->Check("xxxx");

// Check instance initialized with $params array
// using Biscolab\UpDown\Fields\CheckFields
$params = [
    CheckFields::URL => 'https://insert.your-url.to/check'
];
$check = updown()->Check($params);
```  
Further info about `Check` class and all af its methods [here](https://updown-sdk.biscolab.com/docs/check)

Follow the same pattern for `Node`, `WebHook`, `Event` objects.

## Test

```sh
composer test
```
