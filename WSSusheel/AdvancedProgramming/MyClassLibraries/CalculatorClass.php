<?php
/** 
*This calculator class is created by Susheel. It takes two variables
*$val1 and $val2 and performs calculations on them accordingly
*/
class Calculator 
{
    private $_val1 , $_val2;

    public function Calculator($val1, $val2)
    {
        $this->_val1 = intval($val1);
        $this->_val2 = intval($val2);      
    }

    public function add()
    {
        return $this->_val1 + $this->_val2;
    }

    public function subtract()
    {
         return $this->_val1 - $this->_val2;
    }

    public function multiply (){
        return $this->_val1 * $this->_val2;
    }

    public function divide () {
        return $this->_val1 / $this->_val2;
    }
}



?>