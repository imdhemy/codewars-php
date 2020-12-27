<?php

namespace Tests;

use App\Inverter;
use PHPUnit\Framework\TestCase;

class InverterTest extends TestCase
{
    /**
     * @test
     */
    public function test_invert()
    {
        $this->assertEquals([-1, -2, -3, -4, -5], Inverter::invert([1, 2, 3, 4, 5]));
        $this->assertEquals([-1, 2, -3, 4, -5], Inverter::invert([1, -2, 3, -4, 5]));
        $this->assertEquals([], Inverter::invert([]));
        $this->assertEquals([0], Inverter::invert([0]));
    }
}
