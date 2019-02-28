<?php
/**
 * Copyright (c) 2019 - present
 * laravel-updown - UpDownEventTest.php
 * author: Roberto Belotti - roby.belotti@gmail.com
 * web : robertobelotti.com, github.com/biscolab
 * Initial version created on: 28/2/2019
 * MIT license: https://github.com/biscolab/laravel-updown/blob/master/LICENSE
 */

namespace Biscolab\LaravelUpDown\Tests;

use Biscolab\UpDown\Objects\Event;

/**
 * Class UpDownEventTest
 * @package Biscolab\LaravelUpDown\Tests
 */
class UpDownEventTest extends TestCase
{

    /**
     * @test
     */
    public function testEventMethodReturnsEventObject()
    {

        $this->assertInstanceOf(Event::class, updown()->Event());
    }

    /**
     * @return void
     */
    public function setUp(): void
    {

        parent::setUp(); // TODO: Change the autogenerated stub

    }
}