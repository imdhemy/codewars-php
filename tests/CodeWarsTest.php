<?php

namespace Tests;

use App\CodeWars;
use PHPUnit\Framework\TestCase;

class CodeWarsTest extends TestCase
{
    /**
     * @test
     * @dataProvider namesDataProvider
     *
     * @param $name
     * @param $result
     */
    public function test_it_generate_name_initials($name, $result)
    {
        $this->assertEquals($result, CodeWars::abbrevName($name));
    }

    public function namesDataProvider(): array
    {
        return [
            ['Sam Harris', 'S.H'],
            ['Patrick Feenan', 'P.F'],
            ['Evan Cole', 'E.C'],
            ['ahmed Ali', 'A.A'],
        ];
    }
}
