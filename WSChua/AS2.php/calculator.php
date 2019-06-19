<?php

//create a calculator that can perform the addition multiplication subtraction and division and 2 number.

class Calculator {
    private $_val1 , $_val2;
    public $publicname;
    private $secretname;

    public function __construct($val1, $val2){
        $this->_val1 = $val1;       
        $this->_val2 = $val2;
    }

    public function add(){
        return $this->_val1 + $this->_val2;
    }

    public function subtract(){
        return $this->_val1 - $this->_val2;
    }

    public function multiply (){
        return $this->_val1 * $this->_val2;
    }

    public function divide () {
        return $this->_val1 / $this->_val2;
    }

    /*public function whatsmyname($name)
    {

        echo "Your Name is : " . $name;

        $publicname = "Superman";
        $secretname = "Clark Kent";
    }*/
}

$calc = new Calculator(3,4);
echo $calc->add();
echo "<br>";


$calc = new Calculator (15,12);
echo "<p>15 - 12 = ".$calc->subtract(). "</p>";

$calc = new Calculator (20,2);
echo "<p> 20 * 2 = ".$calc->multiply(). "</p>";

$calc = new Calculator (20,2);
echo "<p> 20 / 2 = ".$calc ->divide(). "</p>";

/*$calc->whatsmyname("CHUA");
echo "<br>";

echo $calc->$publicname;
echo "<br>";
echo $calc->$secretname;
*/

?>