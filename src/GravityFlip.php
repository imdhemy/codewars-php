<?php


namespace App;

class GravityFlip
{
    /**
     * @param string $dir
     * @param array $arr
     * @return array
     */
    public static function flip(string $dir, array $arr): array
    {
        $dir === 'R' ? sort($arr) : rsort($arr);

        return $arr;
    }
}
