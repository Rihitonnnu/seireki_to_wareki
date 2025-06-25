<?php

use SeirekiToWareki\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
        $this->assertEquals(0, $calculator->add(-1, 1));
    }
}
