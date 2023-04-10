
<p align="center">
    <img height="250px" width="250px" src="https://i.ibb.co/V9NL0gr/DALL-E-2023-04-11-00-07-01-logo-skeleton-laravel-vibes-for-package-and-the-text-will-be-Skeleton.png">
</p>

## Introduction

The Laravel Skeleton package provides a customizable starting point for developers creating packages for Laravel.


## Installation

You can install the package using composer

```sh
$  composer require nogorsolutionsltd/skeleton
```

Then add the service provider to `config/app.php`. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```php
'providers' => [
    ...
     NogorSolutionsLTD\Skeleton\ServiceProvider::class,
    ...
];
```

You can publish the configuration file and assets by running:

```sh
$ php artisan vendor:publish --provider=" NogorSolutionsLTD\Skeleton\ServiceProvider::class,"
```

Now that we have published a few new files to our application we need to reload them with the following command:

```sh
$ composer dump-autoload
```


## Change log

Please see the [changelog](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](CONTRIBUTING.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- Sarfaraz Muhammad Sajib

## License

license. Please see the [license file](LICENCE.md) for more information.
