<?php

class MyCalculator {
public $FV, $SV;
public function __construct( $fvalue, $svalue ) {
$this->FV = $fvalue;
$this->SV = $svalue;
}
public function add() {
    echo $this->FV + $this->SV;
}
public function subtract() {
    echo $this->FV - $this->SV;
}
public function multiply() {
    echo $this->FV * $this->SV;
}
public function divide() {
    echo $this->FV / $this->SV;
}
}

$mycalc = new MyCalculator(12, 6); 
$mycalc-> add()."\n";
$mycalc-> subtract()."\n"; 
$mycalc-> multiply()."\n"; 
$mycalc-> divide()."\n"; 

class Remainder extends MyCalculator
{
    public function modulus() {
    echo $this->FV % $this->SV;
    }
}

$mycal = new Remainder (15, 7); 
$mycal-> modulus()."\n";

?>