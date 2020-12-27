<?php

namespace Tests;

use App\Clock;
use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{
    /**
     * @test
     */
    public function test_past()
    {
        $this->assertEquals(0, Clock::past(0, 0, 0));
        $this->assertEquals(3600000, Clock::past(1, 0, 0));
    }
}
