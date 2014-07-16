<?php

namespace PHPMad\Tests;

use PHPMad\Foo;

class FooTest extends TestCase
{

    protected $object;
    private $fizzBuzz;

    protected function setUp()
    {
        $this->object = new Foo();
        $this->fizzBuzz = $this->object->run();
    }

    function testLength()
    {
        $this->assertCount(100, $this->fizzbuzz);
    }

    function testNormalNumbersAreThemselves()
    {
        $this->assertEquals(1, $this->fizzBuzz[0]);
    }

}
