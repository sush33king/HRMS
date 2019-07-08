<?php
class MyCalculator {
protected $_fval, $_sval;
public function __construct( $fval, $sval) {
$this->_fval = $fval;
$this->_sval = $sval;
static $count = 1;
echo "Class 'MyCalculator' Instance " . $count . ":<br>";
$count++;
}
public function add() {
return $this->_fval + $this->_sval;
}
public function subtract() {
return $this->_fval - $this->_sval;
}
public function multiply() {
return $this->_fval * $this->_sval;
}
public function divide() {
return $this->_fval / $this->_sval;
}
}

class Remainder extends MyCalculator
{
    public function modulus($_fval,$_sval) {
    return $this->_fval % $this->_sval;
    }
}

$mycalc1 = new MyCalculator(30, 30);
echo $mycalc1-> add()."\n <br>"; // Displays 18 
echo $mycalc1-> multiply()."\n <br>"; // Displays 72
echo $mycalc1-> subtract()."\n <br>"; // Displays 6
echo $mycalc1-> divide()."\n <br>"; // Displays 2

echo "<br>";

$mycalc3 = new Remainder();
echo $mycalc3-> modulus(3,2)."\n"; //Displays 1
echo "<br>";
echo "<br>";

?>