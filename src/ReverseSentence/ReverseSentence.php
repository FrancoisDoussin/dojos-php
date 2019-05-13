<?php

namespace App\ReverseSentence;

class ReverseSentence
{
    public function reverse(string $sentence): string
    {
        $arraySentence = explode(" ", $sentence);
        krsort($arraySentence);
        $reverseSentence = implode(" ", $arraySentence);
        return ucfirst($reverseSentence);
    }
}