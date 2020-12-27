<?php

namespace Tests;

use PHPUnit\Framework\TestCase;


function solution(int $number): int
{
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($i % 3 === 0 || $i % 5 === 0) {
            $sum += $i;
        }
    }

    return $sum;
}

class MultiplesOf3Or5 extends TestCase
{
    /**
     * @test
     */
    public function test_solution()
    {
        $this->assertEquals(0, solution(-1));
        $this->assertEquals(23, solution(10));
    }
}
