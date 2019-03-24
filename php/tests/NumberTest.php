<?php

namespace Tests;

use App\Number;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{
    /**
     * @test isFizz
     * @dataProvider isFizzDataProvider
     */
    public function isFizzTest($expected, $number)
    {
        $targetNumber = new Number($number);
        $this->assertSame($expected, $targetNumber->isFizz());
    }

    /**
     * dataProvider
     *
     * @return array
     */
    public function isFizzDataProvider()
    {
        return [
            '3の倍数でないとき、falseをかえすこと' => [
                false,
                1
            ],
            '3の倍数のとき、trueをかえすこと' => [
                true,
                3
            ],
        ];
    }

    /**
     * @test isBuzz
     * @dataProvider isBuzzDataProvider
     */
    public function isBuzzTest($expected, $number)
    {
        $targetNumber = new Number($number);
        $this->assertSame($expected, $targetNumber->isBuzz());
    }

    /**
     * dataProvider
     *
     * @return array
     */
    public function isBuzzDataProvider()
    {
        return [
            '5の倍数でないとき、falseをかえすこと' => [
                false,
                1
            ],
            '5の倍数のとき、trueをかえすこと' => [
                true,
                3
            ],
        ];
    }
}
