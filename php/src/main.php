<?php

namespace App;

class Main
{
    /** @var int */
    private $limitNumber;

    public function __construct(int $limit)
    {
        $this->limitNumber = $limit;
    }

    /**
     * dummy function. this function return true.
     *
     * @return bool
     */
    public function success()
    {
        return true;
    }

    public function exec()
    {
        for ($i = 1; $i <= $this->limitNumber; $i++) {
            $splitString = "\t";
            if ($i % 10 === 0) {
                $splitString = "\n";
            }
            $target = new Number($i);
            echo($target . $splitString);
        }
        echo "\n";
    }
}
require_once __DIR__ . '/../vendor/autoload.php';

$main = new Main($argv[1]);

$main->exec();