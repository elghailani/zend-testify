<?php

namespace Zend\Test\one;

class Calculator
{

    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    public function add(float $a, float $b) : float
    {
        return $a + $b;
    }

    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    public function substract(float $a, float $b) : float
    {
        return $a - $b;
    }

    /**
     * @param float $a
     * @param float $b
     * @return float
     */
    public function times(float $a, float $b) : float
    {
        return $a * $b;
    }
}