<?php

class NumericArray{

    private $values;

    public function __construct(array $a){
        $this->values=$a;
    }

    public function getAverage() : float
    {
        $numItems = count($this->values);
        $totalsum =0;

        foreach($this->values as $value){
            $totalsum += $value;
        }

        if($numItems==0){
            return 0;
        }
        return $totalsum/floatval($numItems);
    }
}