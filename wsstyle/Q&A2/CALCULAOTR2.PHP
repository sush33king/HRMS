<?php
class CALCULATOR{
    private $_Num1 , $_Num2;
    public function CALCULATOR($Num1, $Num2){
        $this->_Num1 = $Num1;
        $this->_Num2 = $Num2;
    }
    public function add(){
        return $this->_Num1 + $this->_Num2;
    }
    public function subtract(){
       //$_Num1 = 10;     
        //$this->$_Num1 = 20;
        //$_Num2 = $_Num1 + $this->$_Num1;
        return $this->_Num1 - $this->_Num2;
        //echo "Num1: " . $_Num1;
        //echo "<br>";
        //echo "this->Num1: " . $this->$_Num1 = 20;
    }
    public function multiply (){
        return $this->_Num1 * $this->_Num2;
    }
    public function divide () {
         return $this->_Num1 / $this->_Num2;
    }
}
class mod extends CALCULATOR { 
    protected $_Num1 , $_Num2;
    public function CALCULATOR($Num1, $Num2){
    parent::CALCULATOR($Num1, $Num2);  
    }
    public function modulus () {
        return $this->_Num1 % $this->_Num2;
    }
}