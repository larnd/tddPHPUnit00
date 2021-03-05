<?php

require_once("src/NumericArray.php");

use PHPUnit\Framework\TestCase;

final class NumericArrayTest extends TestCase
{
    /**
     * @dataProvider averageProvider
     */    

    public function test_getAverage($input, $expected) : void {
        
        $sut = new NumericArray($input);
        
        $actual = $sut->getAverage();
        
        $this->assertEquals($expected, $actual);
    }

    public function averageProvider(): array{
        return[
            'should_return_zero_on_empty_array' =>[array(), 0],
            'should_return_the_first_item_for_single_item_arrays' =>[array(1),1],
            'should_return_the_average_of_two_items' =>[array(1,2), 1.5],
            'should_return_the_average_of_three_items' =>[array(1,2,3),(1+2+3)/ 3.0]
        ];
            }

    //Helper function for refactoring
    private function assert_getAverage(array $input, float $expected)
    { 
        $sut = new NumericArray($input); 

        $actual = $sut->getAverage();          
        $this->assertEquals($expected, $actual);
    }

}