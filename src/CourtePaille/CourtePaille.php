<?php

namespace App\CourtePaille;

class CourtePaille
{
    public function game(array $tab): string
    {
        $result = null;
        unset($tab[0]);
        foreach ($tab as $key => $elem) {
            $tab[$key] = explode(' ', $elem);
        }
        $min = min(array_column($tab, 1));
        foreach ($tab as $data) {
            if ($data[1] == $min) {
                $result = $data[0];
            }
        }
        return $result;
    }
}
