<?php

require_once("src/NumericArray.php");

use PHPUnit\Framework\TestCase;

final class NumericArrayTest extends TestCase
{
    public function test_getAverage_should_return_zero_on_empty_array(): void
    {
        //sut
        $input = array();
        //input
        $sut = new NumericArray($input);
        
        //expected
        $expected =0;
        //actual
        $actual = $sut->getAverage();
        //comparision          
        $this->assertEquals($expected, $actual);
    }
}