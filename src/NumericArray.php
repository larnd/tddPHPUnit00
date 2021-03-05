<?php

class NumericArray{

    private $values;

    public function __construct(array $a){
        $this->values=$a;
    }

    public function getAverage() : int
    {
        if(count($this->values)==0)
            return 0;
        return $this->values[0];
        

    }
}