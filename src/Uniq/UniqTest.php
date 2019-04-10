<?php

namespace App\Uniq;

use PHPUnit\Framework\TestCase;

class UniqTest extends TestCase
{
    public function testFindUniq()
    {
        $uniq = new Uniq();

        $this->assertEquals(12, $uniq-> findUniq([12, 2, 2, 2, 2]));
        $this->assertEquals(0, $uniq-> findUniq([44, 44, 0, 44]));
        $this->assertEquals(44, $uniq-> findUniq([121, 121, 121, 121, 44]));
        $this->assertEquals(null, $uniq-> findUniq([4, 4, 4, 4]));
        $this->assertEquals(1290, $uniq-> findUniq([3, 3, 3, 1290, 3]));
    }
}