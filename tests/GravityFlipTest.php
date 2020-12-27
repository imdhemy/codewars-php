<?php

namespace Tests;

use App\GravityFlip;
use PHPUnit\Framework\TestCase;

class GravityFlipTest extends TestCase
{
    /**
     * @test
     */
    public function testFlip()
    {
        $this->assertEquals([1, 1, 2], GravityFlip::flip('R', [2, 1, 1]));
        $this->assertEquals([1, 1, 2], GravityFlip::flip('R', [1, 2, 1]));
        $this->assertEquals([5, 5, 4, 3, 1], GravityFlip::flip('L', [1, 4, 5, 3, 5]));
    }
}
