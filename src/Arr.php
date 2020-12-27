<?php


namespace App;

class Arr
{
    public static function fill(int $n = 0): array
    {
        return $n === 0 ? [] : range(0, $n - 1);
    }

    public static function toNumberArray(array $stringArray): array
    {
        return array_map("floatval", $stringArray);
    }
}
