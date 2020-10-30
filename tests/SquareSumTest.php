<?php

namespace Tests;

use App\SquareSum;
use PHPUnit\Framework\TestCase;

class SquareSumTest extends TestCase
{

    public function testSquareSum()
    {
        $this->assertEquals(SquareSum::squareSum([1, 2]), 5);
        $this->assertEquals(SquareSum::squareSum([0, 3, 4, 5]), 50);
        $this->assertEquals(SquareSum::squareSum([]), 0);
        $this->assertEquals(SquareSum::squareSum([-1, -2]), 5);
        $this->assertEquals(SquareSum::squareSum([-1, 0, 1]), 2);
    }
}
