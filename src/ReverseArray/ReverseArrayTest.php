<?php

namespace App\ReverseArray;

use PHPUnit\Framework\TestCase;

class ReverseArrayTest extends TestCase
{
    public function testReverseArray()
    {
        $reverseArray = new ReverseArray();

        $this->assertEquals(["C", "B", "A"], $reverseArray->reverseArray(["A", "B", "C"]));
        $this->assertEquals(["E", "I", "B", "E", "M"], $reverseArray->reverseArray(["M", "E", "B", "I", "E"]));
        $this->assertEquals(["E", "I", 0, "E", "M"], $reverseArray->reverseArray(["M", "E", 0, "I", "E"]));
    }

}