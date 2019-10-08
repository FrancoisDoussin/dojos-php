<?php

namespace App\MajorOrMinor;

use PHPUnit\Framework\TestCase;

class MajorOrMinorTest extends TestCase
{
    public function testMajorOrMinor()
    {
        $majorMinor = new MajorOrMinor();
        $this->assertEquals("minor", $majorMinor->majorOrMinor(14));
        $this->assertEquals("major", $majorMinor->majorOrMinor(18));
        $this->assertEquals("major", $majorMinor->majorOrMinor(22));
        $this->assertEquals("junior", $majorMinor->majorOrMinor(10));
        $this->assertEquals("senior", $majorMinor->majorOrMinor(60));
    }
}