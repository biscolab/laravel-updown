<?php
/**
 * Copyright (c) 2019 - present
 * laravel-updown - TestCase.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 15/2/2019
 * MIT license: https://github.com/biscolab/laravel-updown/blob/master/LICENSE
 */

namespace Biscolab\LaravelUpDown\Tests;

use Biscolab\LaravelUpDown\Facades\UpDown;
use Biscolab\LaravelUpDown\UpDownServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

/**
 * Class TestCase
 * @package Biscolab\LaravelUpDown\Tests
 */
class TestCase extends OrchestraTestCase
{

    /**
     * Load package alias
     *
     * @param  \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {

        return [
            'UpDown' => UpDown::class,
        ];
    }

    /**
     * Load package service provider
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {

        return [UpDownServiceProvider::class];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('updown.api_key', env('API_KEY', 'API_KEY'));
    }
}
