<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

function mapper(string $char): ?int
{
    if (ctype_alpha($char)) {
        return ord($char) - 64;
    }

    return null;
}

function alphabet_position(string $s): string
{
    $numbers = array_map('\Tests\mapper', str_split(strtoupper($s)));

    return implode(' ', array_filter($numbers));
}

class AlphabetTest extends TestCase
{
    /**
     * @test
     */
    public function test_alphabet_position()
    {
        $this->assertEquals(
            '20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11',
            alphabet_position('The sunset sets at twelve o\' clock.')
        );
        $this->assertEquals(
            '20 8 5 14 1 18 23 8 1 12 2 1 3 15 14 19 1 20 13 9 4 14 9 7 8 20',
            alphabet_position('The narwhal bacons at midnight.')
        );
    }
}
