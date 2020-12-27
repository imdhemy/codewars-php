<?php


namespace App;

class Alarm
{
    public static function set(bool $employed, bool $vacation): bool
    {
        return $employed && ! $vacation;
    }
}
