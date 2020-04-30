<?php


namespace App;


use function explode;
use function strtoupper;

class CodeWars
{
    /**
     * @param string $name
     * @return string
     */
    public static function abbrevName(string $name): string
    {
        $parts = explode(" ", $name);
        return strtoupper("{$parts[0][0]}.{$parts[1][0]}");
    }
}