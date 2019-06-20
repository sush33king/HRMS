<?php
class Calculator {
    private $_val1 , $_val2 , $_val3;

    public function Calculator($val1, $val2, $val3){
        $this->_val1 = intval($val1);
        $this->_val2 = intval($val2);
        $this->_val3 = intval($val3);
    }

    public function add(){
        return $this->_val1 + $this->_val2;
    }

    public function subtract(){
         echo $this->_val1 - $this->_val2 - $this->_val3;
    }

    public function multiply (){
        return $this->_val1 * $this->_val2;
    }

    public function divide () {
        return $this->_val1 / $this->_val2;
    }
}
/*
if(isset($_GET["x"]) and isset($_GET['y']) and isset($_GET['z']))
{

    $x = $_GET["x"];
    $y = $_GET['y'];
    $z = $_GET['z'];
    $calc = new Calculator ($x,$y,$z);
    $calc->subtract();
}*/


?>