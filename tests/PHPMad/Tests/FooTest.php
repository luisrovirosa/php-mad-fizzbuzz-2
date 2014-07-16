<?php

namespace PHPMad\Tests;

use PHPMad\Foo;

class FooTest extends TestCase
{

    protected $object;

    protected function setUp()
    {
        $this->object = new Foo();
    }

    function testLength()
    {

        $this->assertCount(100, $this->object->run());
    }

}
