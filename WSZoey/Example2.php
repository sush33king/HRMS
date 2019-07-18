<?php
//Parent Class
class Calculator {
protected $_fval, $_sval;

//Construct Method
public function __construct( $fval, $sval) 
{
    $this->_fval = $fval;
    $this->_sval = $sval;
}

//Method
public function add() 
{
    return $this->_fval + $this->_sval;
}

//Child Class inherits parent construct method and variables
class Subtract extends Calculator
{
    public function subtract($_fval,$_sval) 
    {
        return $this->_fval - $this->_sval;
    }
}

//Instantiation
$calcSubtract = new Subtract(10,5);
$calcSubtract->subtract();

?>