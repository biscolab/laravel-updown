<?php
/**
 * Copyright (c) 2019 - present
 * laravel-updown - UpDownBuilder.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 15/2/2019
 * MIT license: https://github.com/biscolab/laravel-updown/blob/master/LICENSE
 */

namespace Biscolab\LaravelUpDown;

use Biscolab\UpDown\Fields\UpDownRequestFields;
use Biscolab\UpDown\UpDown;

class UpDownBuilder
{

    /**
     * @var UpDown
     */
    protected $updown;

    /**
     * UpDownBuilder constructor.
     *
     * @param string $api_key
     */
    public function __construct(string $api_key)
    {

        $this->updown = UpDown::init([
            UpDownRequestFields::API_KEY => $api_key
        ]);

    }

    /**
     * @return UpDown
     */
    public function getUpDown(): UpDown {
        return $this->updown;
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        $class_name = 'Biscolab\UpDown\Objects\\' . $name;

        if(class_exists($class_name)) {

            if(is_array($arguments) && !empty(current($arguments))) {
                $arguments = current($arguments);
            }
            return new $class_name($arguments);
        }
    }

}