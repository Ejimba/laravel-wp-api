<?php namespace Ejimba\LaravelWpApi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LaravelWpApiServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('ejimba/laravel-wp-api');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		AliasLoader::getInstance()->alias('LaravelWpApi', 'Ejimba\AtSms\Facades\LaravelWpApi');
		$this->app->bind('laravel-wp-api', function ()
        {
        	return new LaravelWpApi;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
