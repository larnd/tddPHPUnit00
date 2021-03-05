<?php

require_once("src/NumericArray.php");

use PHPUnit\Framework\TestCase;

final class NumericArrayTest extends TestCase
{
    public function test_getAverage_should_return_zero_on_empty_array(): void
    {
        $input = array();       
        $expected =0;

        $this->assert_getAverage($input, $expected);
    }

    public function test_average_should_return_the_first_item_for_single_item_arrays() : void {
        $input = array(1);
        $expected =1;
      
        $this->assert_getAverage($input, $expected);
    }

    //Helper function for refactoring
    private function assert_getAverage(array $input, int $expected)
    { 
        $sut = new NumericArray($input); 

        $actual = $sut->getAverage();          
        $this->assertEquals($expected, $actual);
    }
}