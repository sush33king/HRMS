<?php
class Calculator {
    private $_val1 , $_val2;

    public function __construct($val1, $val2){
        $this->_val1 = $val1;
        $this->_val2 = $val2;
    }

    public function add(){
        return $this->_val1 + $this->_val2;
    }

    public function subtract(){
       //$_val1 = 10;
        
        //$this->$_val1 = 20;
        //$_val2 = $_val1 + $this->$_val1;
        return $this->_val1 - $this->_val2;

        //echo "val1: " . $_val1;
        //echo "<br>";
        //echo "this->val1: " . $this->$_val1 = 20;
    }

    public function multiply (){
        return $this->_val1 * $this->_val2;
    }

    public function divide () {
         return $this->_val1 / $this->_val2;
    }
}

class mod extends calculator { 

    private $_val1 , $_val2;

    public function __construct($val1, $val2){
    parent::__construct($val1, $val2);  
    }

    public function modulus () {
        return $this->_val1 % $this->_val2;
    }

}


$calc = new Calculator(3,4);
echo "<p>3 + 4 = ".$calc->add(). "</p>";

$calc = new Calculator (15,12);
echo "<p>15 - 12 = ".$calc->subtract(). "</p>";
//$calc->subtract();

$calc = new Calculator (20,2);
echo "<p> 20 * 2 = ".$calc->multiply(). "</p>";

$calc = new Calculator (20,2);
echo "<p> 20 / 2 = ".$calc ->divide(). "</p>";

$calc = new mod (20,3);
echo "<p> 20 % 3 = ".$calc ->modulus(). "</p>";
?>