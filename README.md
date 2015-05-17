# laravel-wp-api

This is a fork of [https://github.com/Cyber-Duck/laravel-wp-api](https://github.com/Cyber-Duck/laravel-wp-api) (Laravel 5 ONLY).
All credits go to [Cyber-Duck](https://github.com/Cyber-Duck).
This is a Laravel 4.2 package for the [Wordpress JSON REST API](https://github.com/WP-API/WP-API) 

## Install

This is a Laravel 4.2 package. Laravel 5 users should use [this](https://github.com/Cyber-Duck/laravel-wp-api)
Simply add the following line to your `composer.json` and run `composer update`:

```php
"ejimba/laravel-wp-api": "0.1.x"
```

Add 
```php
'Ejimba\LaravelWpApi\LaravelWpApiServiceProvider',
```
to the `providers` array in your `app/config/app.php`:

## Configuration

Publish the package config files to configure the location of your Wordpress install:

```php
php artisan config:publish ejimba/laravel-wp-api
```

Ensure you update the endpoint to match your wordpress site e.g.

```php
return array(

    'endpoint' => 'http://www.mywordpresssite.com',
    
);
```

On the target site, ensure you install the [Wordpress JSON API Plugin](https://wordpress.org/plugins/json-rest-api/). You search it from the plugins menu in the worpress dashboard.

### Usage

The package provides a simplified interface to some of the existing api methods documented [here](http://wp-api.org/).
You can either use the Facade provided or inject the LaravelWpApi class.

#### Posts
##### All Posts
```php
LaravelWpApi::posts();

```
##### Posts in page
```php
LaravelWpApi::posts($page);

```
##### Single Post
```php
LaravelWpApi::post($slug);

```

#### Pages
```php
LaravelWpApi::pages();

```

#### Categories
```php
LaravelWpApi::categories();

```

#### Tags
```php
LaravelWpApi::tags();

```

#### Category posts
```php
LaravelWpApi::category_posts($slug, $page);

```

#### Search
```php
LaravelWpApi::search($query, $page);

```

#### Archive
```php
LaravelWpApi::archive($year, $month, $page);

```

## Support
In case of any issue please test with a new laravel installation. If it persists, [file an issue](https://github.com/Cyber-Duck/laravel-wp-api/issues) and I will try my best to help you out.

## Credits
1. [Cyber-Duck](https://github.com/Cyber-Duck)
2. [Laravel](http://laravel.com)

## License

Licensed under [The MIT License (MIT)](LICENSE).