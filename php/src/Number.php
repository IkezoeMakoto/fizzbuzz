<?php

namespace App;

/**
 * Class Number
 * @package App
 */
class Number
{
    /** @var int */
    private $number;

    const FIZZ_NUMBER = 3;
    const BUZZ_NUMBER = 5;

    /**
     * Number constructor.
     * @param int $number
     */
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    /**
     * @return bool
     */
    public function isFizz(): bool
    {
        return $this->number % self::FIZZ_NUMBER === 0;
    }

    /**
     * @return bool
     */
    public function isBuzz(): bool
    {
        return $this->number % self::BUZZ_NUMBER === 0;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        if ($this->isFizz() && $this->isBuzz()) {
            return 'FizzBuzz';
        }
        if ($this->isFizz()) {
            return 'Fizz';
        }
        if ($this->isBuzz()) {
            return 'Buzz';
        }

        return (string)$this->number;
    }
}
