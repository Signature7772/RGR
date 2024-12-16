<?php

namespace Tests\Unit;

use App\Helpers\MathHelper;
use PHPUnit\Framework\TestCase;

// Тести для MathHelper
class MathHelperTest extends TestCase
{
    // Тест для додавання
    public function testAddition()
    {
        $this->assertEquals(4, MathHelper::calculate('2+2'));
    }

    // Тест для віднімання
    public function testSubtraction()
    {
        $this->assertEquals(6, MathHelper::calculate('10-4'));
    }

    // Тест для множення
    public function testMultiplication()
    {
        $this->assertEquals(42, MathHelper::calculate('6*7'));
    }

    // Тест для ділення
    public function testDivision()
    {
        $this->assertEquals(5, MathHelper::calculate('20/4'));
    }

    // Тест для дужок
    public function testParentheses()
    {
        $this->assertEquals(20, MathHelper::calculate('(2+3)*4'));
    }

    // Тест для операції модулю
    public function testModulo()
    {
        $this->assertEquals(1, MathHelper::calculate('10%3'));
    }

    // Тест для від'ємних чисел
    public function testNegativeNumbers()
    {
        $this->assertEquals(-2, MathHelper::calculate('-5+3'));
    }

    // Тест для складного ділення
    public function testComplexDivision()
    {
        $this->assertEquals(3, MathHelper::calculate('(10+20)/(5*2)'));
    }

    // Тест для вкладених дужок
    public function testNestedParentheses()
    {
        $this->assertEquals(25, MathHelper::calculate('(3*(4+5))-2'));
    }

    // Тест для декількох операцій
    public function testMultipleOperations()
    {
        $this->assertEquals(20, MathHelper::calculate('((10+5)*3-(2+3))/2'));
    }
}

