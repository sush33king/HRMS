<?php

class Calculator 
{
    private $_num1 , $_num2;
    public function calculator ($num1, $num2){
        $this->_num1 = $num1;
        $this->_num2 = $num2;
    }
    public function add(){
        return $this->_num1 + $this->_num2;
    }
    public function subtract(){        
        echo $this->_num1 - $this->_num2;
      
    }
    public function multiply ()
    {
        return $this->_num1 * $this->_num2;
    }
    public function divide () {
         return $this->_num1 / $this->_num2;
    }
}
//_____________________________________________________________


if(isset($_GET["x"]) and isset($_GET['y']))
{

    $x = $_GET["x"];
    $y = $_GET['y'];
    $calc = new Calculator ($x,$y);
    $calc->subtract();

}
?>