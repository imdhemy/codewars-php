<?php


namespace Tests;

function getIndicesOfItemWeights($arr, $limit): array
{
    $combinations = [];
    for ($index = 0; $index < count($arr); $index++) {
        $w = $arr[$index];
        $complementIndex = array_search($limit - $w, $combinations);
        if ($complementIndex !== false) {
            return [$index, $complementIndex];
        }
        $combinations[$index] = $w;
    }
    return [];
}

use PHPUnit\Framework\TestCase;

class MergingTwoPackagesTest extends TestCase
{
    /**
     * @test
     */
    public function test_getIndicesOfItemWeights()
    {
        $this->assertEquals([], getIndicesOfItemWeights([9], 9));
        $this->assertEquals([1, 0], getIndicesOfItemWeights([4, 4], 8));
        $this->assertEquals([2, 1], getIndicesOfItemWeights([4, 4, 1], 5));
        $this->assertEquals([3, 1], getIndicesOfItemWeights([4, 6, 10, 15, 16], 21));
        $this->assertEquals([4, 0], getIndicesOfItemWeights([4, 6, 10, 15, 16], 20));
        $this->assertEquals([6, 2], getIndicesOfItemWeights([12, 6, 7, 14, 19, 3, 0, 25, 40], 7));
    }
}
