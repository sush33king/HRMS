<?php

//create a calculator that can perform the addition multiplication subtraction and division and 2 number.

class Calculator {
    protected $p_val1 , $p_val2;
    

    

    public function add($x, $y){
        return $x + $y;
    }

    public function subtract($x, $y){
        return $x - $y;
    }

    public function multiply ($x, $y){
        return $x * $y;
    }

    public function divide ($x, $y) {
        return $x / $y;
    }

    /*public function whatsmyname($name)
    {

        echo "Your Name is : " . $name;

        $publicname = "Superman";
        $secretname = "Clark Kent";
    }*/
}

/*$calc = new Calculator(3,4);
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




//create child class from calculator class
class MCalculator extends Calculator{

    function mod ($x,$y)
    {
        return $x % $y;
    }
}




$calc = new MCalculator;
echo $calc->mod(5,3);
echo "<br>";
echo $calc->add(5,3);






?>