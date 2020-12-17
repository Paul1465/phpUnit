<?php 

namespace App\Tests\Utils;

use App\Utils\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /** @test */    
    public function can_add_two_integers()
    {
    $calculator = new Calculator;

    $result = $calculator->add(4,8);

    $this->assertEquals(12, $result);
    }

    /** @test */
    public function can_substract_two_integers()
    {
    $calculator = new Calculator;

    $result = $calculator->substract(12, 3);

    $this->assertEquals(9, $result);
    }
}