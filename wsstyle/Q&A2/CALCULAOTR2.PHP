<?php
class CALCULATOR
{
    
    private $_Num1 , $_Num2;
    
    public function CALCULATOR($Num1, $Num2)
    {
        $this->_Num1 = $Num1;
        $this->_Num2 = $Num2;
    }
    
    public function add()
    {
        return $this->_Num1 + $this->_Num2;
    }

    public function subtract()
    {
       //$_Num1 = 10;     
        //$this->$_Num1 = 20;
        //$_Num2 = $_Num1 + $this->$_Num1;
        return $this->_Num1 - $this->_Num2;
        //echo "Num1: " . $_Num1;
        //echo "<br>";
        //echo "this->Num1: " . $this->$_Num1 = 20;
    }

    public function multiply ()
    {
        return $this->_Num1 * $this->_Num2;
    }

    public function divide ()
    {
         return $this->_Num1 / $this->_Num2;
    }
}
class mod extends CALCULATOR 
{ 
    public $x , $y;

    public function __constructor($Num1, $Num2)
    {
        $x= $Num1;
        $y=$Num2;
        parent::__constructor($Num1, $Num2); 
        
    }

    public function modulus () 
    {
        return $this->x % $this->y;
    }
}



$calc = new mod(1,5);
//echo $calc->add();
echo $calc->modulus();


?>