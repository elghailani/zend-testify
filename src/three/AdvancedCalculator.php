<?php

namespace Zend\Test\three;

use Zend\Test\one\Calculator;

class AdvancedCalculator extends Calculator
{


    /**
     * @param float $a
     * @param float $b
     * @return float
     * @throws \DivisionByZeroError
     */
    public function devide(float $a, float $b) : float
    {
        return $a/$b;
    }
    /**
     * @param float $a
     * @param float $b
     * @return float
     * @throws \DivisionByZeroError
     */
    public function modulo(float $a, float $b) : int
    {
        return $a%$b;
    }


}