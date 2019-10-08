<?php

namespace App\ReverseArray;

class ReverseArray
{
    public function reverseArray(array $arr): array
    {
        $reverse = [];
        for ($i=count($arr)-1; $i>=0; $i--) {
            $reverse[] = $arr[$i];
        }
        return $reverse;
    }
}
