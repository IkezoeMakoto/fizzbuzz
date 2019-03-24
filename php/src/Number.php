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
    public function isFizz()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isBuzz()
    {
        return true;
    }
}
