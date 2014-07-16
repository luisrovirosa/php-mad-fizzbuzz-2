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
        $this->assertCount(100, $this->fizzBuzz);
    }

    function testNormalNumbersAreThemselves()
    {
        $this->assertEquals(1, $this->fizzBuzz[0]);
    }

    function testMultipleOf3HasFizz()
    {
        $this->assertEquals('Fizz', $this->fizzBuzz[2]);
    }

    function testMultipleOf5HasBuzz()
    {
        $this->assertEquals('Buzz', $this->fizzBuzz[4]);
    }

    function testMultipleOf15isFizzBuzz()
    {
        $this->assertEquals('FizzBuzz', $this->fizzBuzz[14]);
    }

    function testContains3HasFizz()
    {
        $this->assertEquals('Fizz', $this->fizzBuzz[12]);
    }

    function testContains5HasBuzz()
    {
        $this->assertEquals('Buzz', $this->fizzBuzz[51]);
    }

    // testContains3And5IsFizzBuzz
}
