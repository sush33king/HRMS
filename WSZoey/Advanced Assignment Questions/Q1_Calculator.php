<?php
class MyCalculator {
protected $_fval, $_sval;
public function __construct( $fval, $sval ) {
$this->_fval = $fval;
$this->_sval = $sval;
}
public function add() {
return $this->_fval + $this->_sval;
}
public function subtract() 
return $this->_fval - $this->_sval;
}
public function multiply() {
return $this->_fval * $this->_sval;
}
public function divide() {
return $this->_fval / $this->_sval;
}
}

echo "mycalc1: <br>";

$mycalc1 = new MyCalculator(12, 6); 
echo $mycalc1-> add()."\n <br>"; // Displays 18 
echo $mycalc1-> multiply()."\n <br>"; // Displays 72
echo $mycalc1-> subtract()."\n <br>"; // Displays 6
echo $mycalc1-> divide()."\n <br>"; // Displays 2

echo "<br>";

echo "mycalc2: <br>";

$mycalc2 = new MyCalculator(20, 10); 
echo $mycalc2-> add()."\n <br>"; // Displays 30 
echo $mycalc2-> multiply()."\n <br>"; // Displays 200
echo $mycalc2-> subtract()."\n <br>"; // Displays 10
echo $mycalc2-> divide()."\n <br>"; // Displays 2

echo "<br>";
?>