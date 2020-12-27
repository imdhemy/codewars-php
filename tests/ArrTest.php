<?php

namespace Tests;

use App\Arr;
use PHPUnit\Framework\TestCase;

class ArrTest extends TestCase
{

    public function test_fill()
    {
        $this->assertEquals([], Arr::fill());
        $this->assertEquals([0, 1, 2, 3], Arr::fill(4));
        $this->assertEquals([], Arr::fill(0));
    }

    /**
     * @test
     */
    public function test_toNumberArray()
    {
        $this->assertSame([1.1, 2.2, 3.3], Arr::toNumberArray(["1.1", "2.2", "3.3"]));
    }
}
