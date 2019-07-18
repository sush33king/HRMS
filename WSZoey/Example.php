<?php

class Flower {}

    class Garden  
    {
        public function __construct(Flower $f1, Flower $f2, Flower $f3, Flower $f4)
        {
            $this->flower1 = $f1;
            $this->flower2 = $f2;
            $this->flower3 = $f3;
            $this->flower4 = $f4;
        }
    }
    
    $flower1 = new Flower();
    $flower2 = new Flower();
    $flower3 = new Flower();
    $flower4 = new Flower();
    
    $daisyfield = new Garden($flower1, $flower2, $flower3, $flower4);

?>