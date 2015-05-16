<?php namespace Ejimba\LaravelWpApi\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelWpApi extends Facade {

    protected static function getFacadeAccessor() { return 'laravel-wp-api'; }

}