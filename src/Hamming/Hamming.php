<?php

namespace App\Hamming;

class Hamming
{
    public function check(string $firstChain, string $secondChain)
    {
        $counting = 0;
        for($i = 0; $i < strlen($firstChain); $i++) {
            if($firstChain[$i] !== $secondChain[$i]) {
                $counting +=1;
            }
        }
        return $counting;
    }
}