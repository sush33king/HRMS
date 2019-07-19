<?php

class MyCalculator {

    //class member variables
    public $FV, $SV;

    //class constructor method
    public function __construct( $fvalue, $svalue ) {
    //initialize variables
    $this->FV = $fvalue;
    $this->SV = $svalue;
    }

    //class member methods
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



//inherited all public and protected members of its parent MyCalculator
class Remainder extends MyCalculator
{
    public function modulus() {
    echo $this->FV % $this->SV;
    }
}


//Test 1 - Test MyCalculator
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> add(). "<br>";
echo $mycalc-> subtract(). "<br>"; 
echo $mycalc-> multiply(). "<br>"; 
echo $mycalc-> divide(). "<br>"; */

//Test 2 - Test inheritence
$myRcal = new Remainder (15, 7); 
echo $myRcal-> modulus(). "<br>";
$myRcal->add();

?>