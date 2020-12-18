# Laravel Wordpress Hash Driver

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ammardev/laravel-wp-hash-driver.svg?style=flat-square)](https://packagist.org/packages/ammardev/laravel-wp-hash-driver)

[![Total Downloads](https://img.shields.io/packagist/dt/ammardev/laravel-wp-hash-driver.svg?style=flat-square)](https://packagist.org/packages/ammardev/laravel-wp-hash-driver)

A package that supports Wordpress hashing in Laravel applications.

## Installation

You can install the package via composer:

```bash
composer require ammardev/laravel-wp-hash-driver
```

## Usage

You can use make and check methods in Laravel's Hash facade by choosing wordpress driver as the following:

``` php
// Hash a password:
$hashed = Hash::driver('wp')->make('my-password');

// Check a password:
Hash::driver('wp')->check('my-password', $hashed);
```

Or you can set Wordpress hashers as the default driver in `config/hashing.php`:
```php
return [
    // ...

    'driver' => 'wp',

    // ...
];
```
And then you can use `make` and `check` methods directly without choosing the driver using `driver` method.


### Testing

``` bash
composer test
```
