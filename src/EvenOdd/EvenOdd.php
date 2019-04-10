<?php

namespace App\EvenOdd;

class EvenOdd
{
    public function evenOrOdd(array $tab): int
    {
        $evenOdd = [];
        foreach ($tab as $value){
            $type = $value%2 == 0 ? 'even' : 'odd';
            $evenOdd[$type][] = $value;
        }

        if (count($evenOdd['even']) === 1) {
            return $evenOdd['even'][0];
        } else {
            return $evenOdd['odd'][0];
        }
    }
}
