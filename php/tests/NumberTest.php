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
                5
            ],
        ];
    }

    /**
     * @test __toString
     * @dataProvider toStringDataProvider
     */
    public function toStringTest($expected, $number)
    {
        $targetNumber = new Number($number);
        $this->assertSame($expected, (string)$targetNumber);
    }

    /**
     * dataProvider
     *
     * @return array
     */
    public function toStringDataProvider()
    {
        return [
            '(int)1のとき、(string)1が出力されること' => [
                '1',
                1
            ],
            '(int)3のとき、(string)Fizzが出力されること' => [
                'Fizz',
                3
            ],
            '(int)5のとき、(string)Buzzが出力されること' => [
                'Buzz',
                5
            ],
        ];
    }
}
