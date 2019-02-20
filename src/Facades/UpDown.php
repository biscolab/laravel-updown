<?php
/**
 * Copyright (c) 2019 - present
 * laravel-updown - UpDown.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 15/2/2019
 * MIT license: https://github.com/biscolab/laravel-updown/blob/master/LICENSE
 */

namespace Biscolab\LaravelUpDown\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class ReCaptcha
 * @package Biscolab\LaravelUpDown\Facades
 */
class UpDown extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() {

		return 'updown';
	}
}
