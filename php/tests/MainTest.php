<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * @test sample test
     */
    public function sample()
    {
        $this->assertTrue(true);
    }

    /** @noinspection NonAsciiCharacters */
    /**
     * @test main->success()
     */
    public function success_trueを返すこと()
    {
        $main = new \App\Main();
        $actual = $main->success();

        $this->assertTrue($actual);
    }
}
