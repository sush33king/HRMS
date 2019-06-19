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
        echo $this->_val1 - $this->_val2;
      
    }
    public function multiply ()
    {
        return $this->_val1 * $this->_val2;
    }
    public function divide () {
         return $this->_val1 / $this->_val2;
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