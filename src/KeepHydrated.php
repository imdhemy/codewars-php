<?php


namespace App;


class KeepHydrated
{
    /**
     * @param float $time
     * @return int
     */
    public static function litres(float $time): int
    {
        return $time / 2;
    }
}