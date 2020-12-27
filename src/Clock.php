<?php


namespace App;

class Clock
{
    public static function past(int $h, int $m, int $s): int
    {
        return ($h * 3600 + $m * 60 + $s) * 1000;
    }
}
