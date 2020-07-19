<?php

namespace ZendTest\Test\three;

use Zend\Test\three\AdvancedCalculator;
use PHPUnit\Framework\TestCase;

class AdvancedCalculatorTest extends TestCase {

    /**
     * @var AdvancedCalculator
     */
    private $calculator;

    public function addDataProvider() {
        return array(
            array(1,2,3),
            array(0,0,0),
            array(-1,-1,-2),
        );
    }

    protected function setUp() : void
    {
        $this->calculator = new AdvancedCalculator();
    }

    protected function tearDown() : void
    {
        $this->calculator = NULL;
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);
        $this->assertEquals($expected, $result);
    }

}
