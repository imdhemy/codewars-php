<?php

namespace Tests;

use App\Alarm;
use PHPUnit\Framework\TestCase;

class AlarmTest extends TestCase
{
    public function test_set()
    {
        $this->assertEquals(false, Alarm::set(true, true));
        $this->assertEquals(false, Alarm::set(false, true));
        $this->assertEquals(true, Alarm::set(true, false));
        $this->assertEquals(false, Alarm::set(false, false));
    }
}
