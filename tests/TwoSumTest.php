<?php


namespace Tests;

class Solution
{
    /**
     * @param array $nums
     * @param int $target
     * @return array
     */
    public function twoSum(array $nums, int $target): array
    {
        $map = [];

        $size = count($nums);
        for ($i = 0; $i < $size; $i++) { // n
            $complement = $target - $nums[$i];
            if (array_key_exists($complement, $map)) { // O(1)
                $j = $map[$complement];
                return $i < $j ? [$i, $j] : [$j, $i];
            }
            $map[$nums[$i]] = $i;
        }

        return [];
    }
}

use PHPUnit\Framework\TestCase;

class TwoSumTest extends TestCase
{
    /**
     * @test
     */
    public function test_two_sum()
    {
        $obj = new Solution();
        $this->assertEquals([0, 1], $obj->twoSum([2, 7, 11, 15], 9));
        $this->assertEquals([1, 2], $obj->twoSum([3, 2, 4], 6));
        $this->assertEquals([0, 1], $obj->twoSum([3, 3], 6));
    }
}
