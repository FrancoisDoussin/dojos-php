<?php

namespace App\ReverseSentence;

use PHPUnit\Framework\TestCase;

class ReverseSentenceTest extends TestCase
{
    /**
     * @param string $sample
     * @param string $expected
     * @dataProvider sentenceProvider
     */
    public function testReverse(string $sample, string $expected): void
    {
        $reverseSentence = new ReverseSentence();
        $this->assertSame($expected, $reverseSentence->reverse($sample));
    }

    /**
     * @return array
     */
    public function sentenceProvider()
    {
        return [
            'One letter string'  => ['W', 'W'],
            'One word string'  => ['Wilder', 'Wilder'],
            'Two letters string'  => ['W C', 'C W'],
            'Two words string'  => ['Wilder forever', 'Forever Wilder'],
            'Many words string'  => ['You are a Wilder forever', 'Forever Wilder a are You'],
            'Another string with many words'  => ['I love PHP forever', 'Forever PHP love I'],
        ];
    }
}