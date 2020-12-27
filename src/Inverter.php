<?php


namespace App;

class Inverter
{
    public static function invert(array $arr): array
    {
        return array_map(fn ($num) => -$num, $arr);
    }
}
