<?php

namespace Tests;

use App\Facebook;
use PHPUnit\Framework\TestCase;

class FacebookTest extends TestCase
{
    /**
     * @test
     */
    public function test_likes()
    {
        $this->assertEquals('no one likes this', Facebook::likes([]));
        $this->assertEquals('Peter likes this', Facebook::likes(['Peter']));
        $this->assertEquals('Jacob and Alex like this', Facebook::likes(['Jacob', 'Alex']));
        $this->assertEquals('Max, John and Mark like this', Facebook::likes(['Max', 'John', 'Mark']));
        $this->assertEquals('Alex, Jacob and 2 others like this', Facebook::likes(['Alex', 'Jacob', 'Mark', 'Max']));
    }
}
