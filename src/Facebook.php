<?php


namespace App;

class Facebook
{
    /**
     * @param array $names
     * @return string
     */
    public static function likes(array $names): string
    {
        $count = count($names);
        if ($count === 0) {
            return 'no one likes this';
        }
        if ($count === 1) {
            return sprintf("%s likes this", $names[0]);
        }
        if ($count === 2) {
            return sprintf("%s and %s like this", $names[0], $names[1]);
        }
        if ($count === 3) {
            return $names[0] . ", " . $names[1] . " and " . $names[2] . " like this";
        }
        return sprintf("%s, %s and %d others like this", $names[0], $names[1], $count - 2);
    }
}
