<?php

use App\AdvancedOperations;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    protected $calculator;

    protected function setUp(): void
    {
        $this->calculator = new AdvancedOperations();
    }

    public function testAddition()
    {
        $this->assertEquals(7, $this->calculator->add(5, 2));
    }

    public function testSubtraction()
    {
        $this->assertEquals(3, $this->calculator->subtract(5, 2));
    }

    public function testMultiplication()
    {
        $this->assertEquals(10, $this->calculator->multiply(5, 2));
    }

    public function testDivision()
    {
        $this->assertEquals(2.5, $this->calculator->divide(5, 2));
    }

    public function testDivisionByZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->divide(5, 0);
    }

    public function testSquareRoot()
    {
        $this->assertEquals(3, $this->calculator->sqrt(9));
    }

    public function testSquareOrderRoot()
    {
        $this->assertEquals(2, $this->calculator->sqrtorder(8, 3));
    }

    public function testSquareOrderRootNotAllowedZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->sqrtorder(8, 0);
    }

    public function testPower()
    {
        $this->assertEquals(8, $this->calculator->power(2, 3));
    }

    public function testNegativeSquareRoot()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calculator->sqrt(-9);
    }
}