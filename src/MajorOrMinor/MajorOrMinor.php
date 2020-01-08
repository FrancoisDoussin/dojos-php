<?php

namespace App\MajorOrMinor;

class MajorOrMinor
{
    public function majorOrMinor(int $age): string
    {
        if ($age <= 10) {
            return "junior";
        } elseif ($age < 18) {
            return "minor";
        } elseif ($age < 60) {
            return "major";
        } else {
            return "senior";
        }
    }
}
