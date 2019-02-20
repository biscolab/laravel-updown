<?php
/**
 * Copyright (c) 2019 - present
 * laravel-updown - UpDownServiceProvider.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 15/2/2019
 * MIT license: https://github.com/biscolab/laravel-updown/blob/master/LICENSE
 */

namespace Biscolab\LaravelUpDown;

use Biscolab\UpDown\Fields\UpDownRequestFields;
use Biscolab\UpDown\UpDown;
use Illuminate\Support\ServiceProvider;

/**
 * Class UpDownServiceProvider
 * @package Biscolab\LaravelUpDown
 */
class UpDownServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 *
	 */
	public function boot() {

		$this->publishes([
            __DIR__ . '/../config/updown.php' => config_path('updown.php'),
		]);

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {

		$this->mergeConfigFrom(
			__DIR__ . '/../config/updown.php', 'updown'
		);

		$this->registerUpDownBuilder();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides(): array {

		return ['updown'];
	}

	/**
	 * Register the UpDown builder instance.
	 *
	 * @return void
	 */
	protected function registerUpDownBuilder() {

		$this->app->singleton('updown', function ($app) {

            return new UpDownBuilder(config('updown.api_key'));

        });
	}

}
