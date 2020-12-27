<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

function duplicateCount(string $text): int
{
    return count(array_filter(array_count_values(str_split(strtolower($text))), function ($item) {
        return $item > 1;
    }));
}

class CountingDuplicatesTest extends TestCase
{
    /**
     * @test
     */
    public function test_duplicate_count()
    {
        $this->assertEquals(0, duplicateCount(""));
        $this->assertEquals(0, duplicateCount("abcde"));
        $this->assertEquals(2, duplicateCount("aabbcde"));
        $this->assertEquals(2, duplicateCount("aabBcde"), "should ignore case");
        $this->assertEquals(1, duplicateCount("Indivisibility"));
        $this->assertEquals(2, duplicateCount("Indivisibilities"), "characters may not be adjacent");
    }
}
