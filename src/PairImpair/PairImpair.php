<?php

namespace App\PairImpair;

class PairImpair
{
    public function evenOrOdd($tab)
    {
        foreach ($tab as $value){
            // si modulo vaut 0, le nombre est pair, sinon il est impair
            if ($value%2 == 0) {
                $type = 'pair';
            }else {
                $type='impair';
            }
            $tabPairImpair[$type][] = $value;
        }

        // si le tableau ne contient qu'un seul enregistrement (count =1),
        // on renvoie cette seule ligne (index 0 du tableau)
        if (count($tabPairImpair['pair'])==1) {
            return $tabPairImpair['pair'][0];
        } else {
            return $tabPairImpair['impair'][0];
        }
    }
}
