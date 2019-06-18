<?php
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
        $_val1 = 10;
        
        $this->$_val1 = 20;
        //$_val2 = $_val1 + $this->$_val1;
        //return $this-》_val1 - $this->_val2;

        echo "val1: " . $_val1;
        echo "<br>";
        echo "this->val1: " . $this->$_val1 = 20;
    }

    public function multiply (){
        return $this->_val1 * $this->_val2;
    }

    public function divide () {
         return $this->_val1 / $this->_val2;
    }
}

isset



?>