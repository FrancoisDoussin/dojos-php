<?php

namespace App\Uniq;

class Uniq
{
    public function findUniq(array $numbers): ?int
    {
        $counter = [];
        foreach($numbers as $number){
            if(isset($counter[(string)$number])){
                $counter[(string)$number]++;
            }else{
                $counter[(string)$number] = 1;
            }
        }
        foreach($counter as $number => $count){
            if($count === 1) return $number;
        }
        return null;
    }
}