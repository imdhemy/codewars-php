<?php


namespace App;

class SquareSum
{
    public static function squareSum(array $numbers): int
    {
        return array_sum(array_map(function (int $number) {
            return pow($number, 2);
        }, $numbers));
    }
}
