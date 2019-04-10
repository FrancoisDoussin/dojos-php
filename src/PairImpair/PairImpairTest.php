<?php

namespace App\PairImpair;

use PHPUnit\Framework\TestCase;

class PairImpairTest extends TestCase
{
    public function testEvenOrOdd()
    {
        $pairImpair = new PairImpair();

        $this->assertEquals(2, $pairImpair-> evenOrOdd([1,2,3]));
        $this->assertEquals(3, $pairImpair-> evenOrOdd([-2, 12, 3, 0]));
        $this->assertEquals(4, $pairImpair-> evenOrOdd([1, 4, 3, 5]));
        $this->assertEquals(4, $pairImpair-> evenOrOdd([-1, 4, 3, 3]));
        $this->assertEquals(136, $pairImpair-> evenOrOdd([-125, 453, 136, 3]));
    }

}