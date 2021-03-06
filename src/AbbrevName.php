<?php

namespace App;

class AbbrevName
{
    /**
     * @param string $name
     *
     * @return string
     */
    public static function abbrevName(string $name): string
    {
        $parts = explode(' ', $name);

        return strtoupper("{$parts[0][0]}.{$parts[1][0]}");
    }
}
