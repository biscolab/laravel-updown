<?php
/**
 * Copyright (c) 2019 - present
 * laravel-updown - helpers.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 19/2/2019
 * MIT license: https://github.com/biscolab/laravel-updown/blob/master/LICENSE
 */

if (!function_exists('updown')) {
    /**
     * @return Biscolab\LaravelUpdown\UpDownBuilder
     */
    function updown()
    {
        return app('updown');
    }
}