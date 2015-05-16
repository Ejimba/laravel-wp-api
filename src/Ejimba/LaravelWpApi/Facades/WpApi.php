<?php namespace Ejimba\LaravelWpApi\Facades;

use Illuminate\Support\Facades\Facade;

class WpApi extends Facade {

    protected static function getFacadeAccessor() { return 'wp-api'; }

}