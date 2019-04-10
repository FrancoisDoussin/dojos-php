<?php

namespace App\EvenOdd;

use PHPUnit\Framework\TestCase;

class EvenOddTest extends TestCase
{
    public function testEvenOrOdd()
    {
        $pairImpair = new EvenOdd();

        $this->assertEquals(2, $pairImpair->evenOrOdd([1, 2, 3]));
        $this->assertEquals(3, $pairImpair->evenOrOdd([-2, 12, 3, 0]));
        $this->assertEquals(4, $pairImpair->evenOrOdd([1, 4, 3, 5, 13]));
        $this->assertEquals(4, $pairImpair->evenOrOdd([-1, 4, 3, 3]));
        $this->assertEquals(136, $pairImpair->evenOrOdd([-125, 453, 136, 3]));
    }

}