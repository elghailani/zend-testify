<?php
//require '..\..\src\one\Calculator.php';

namespace ZendTest\Test\one;

use PHPUnit\Framework\TestCase;
use Zend\Test\one\Calculator;

class CalculatorTest extends TestCase {

    private $calculator;

    protected function setUp() : void {
        $this->calculator = new Calculator();
    }

    protected function tearDown() : void {
        $this->calculator = null;
    }

    public function testAdd() {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testSubstract() {
        $result = $this->calculator->substract(9, 3);
        $this->assertEquals(6, $result);
    }

    public function testSubstractWithFloatNumber() {
        $result = $this->calculator->substract(5.5, 2);
        $this->assertEquals(3.5, $result);
    }

    public function testSubstractWithNegativeNumbers() {
        $result = $this->calculator->substract(-5, -2);
        $this->assertEquals(-3, $result);
    }

    public function testTimes() {
        $result = $this->calculator->times(1, 2);
        $this->assertEquals(2, $result);
    }

    public function testTimesWithNegativeNumbers() {
        $result = $this->calculator->times(-3, -3);
        $this->assertEquals(9, $result);
    }

    public function testAddWithStrings() {
        $this->expectException('TypeError');

        $result = $this->calculator->times('a', 5);
    }

}