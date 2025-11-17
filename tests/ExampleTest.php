<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Hello;

class ExampleTest extends TestCase
{
    public function testHello()
    {
        $hello = new Hello();
        $this->assertEquals("Hello World", $hello->say());
    }
}
