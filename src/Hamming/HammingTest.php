<?php

namespace App\Hamming;

use PHPUnit\Framework\TestCase;

class HammingTest extends TestCase
{
    /**
     * @param array $sample
     * @param string $expected
     * @dataProvider sentenceProvider
     */
    public function testCheck(array $sample, int $expected): void
    {
        $reverseSentence = new Hamming();
        $this->assertSame($expected, $reverseSentence->check($sample[0], $sample[1]));
    }

    /**
     * @return array
     */
    public function sentenceProvider()
    {
        return [
            [
                [
                    'CATCGTAATGACGGCCT',
                    'GAGCCTACTAACGGGAT',
                ],
                7
            ],
            [
                [
                    'GAGGCTACTATCGGGAT',
                    'GAGCCTACTAACGGGAT',
                ],
                2
            ],
            [
                [
                    'GAGCCTACTAACGGGAT',
                    'CATCGTCATGCCGCCCT',
                ],
                10
            ],
        ];
    }
}