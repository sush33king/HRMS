<?php

//Calculator Class
class Calculate 
{   
    //Variables
    protected $var1, $var2;

    //Constructor Method
    public function __construct( $var1, $var2 ) 
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
    }
    
    //Add Method
    public function add()
    {
        echo "$this->var1 + $this->var2 = ";
        return $this->var1 + $this->var2;
    }

    //Subtract Method
    public function subtract() 
    {
        echo "$this->var1 - $this->var2 = ";
        return $this->var1 - $this->var2;
    }
    
    //Multiply Method
    public function multiply() 
    {
        echo "$this->var1 * $this->var2 = ";
        return $this->var1 * $this->var2;
    }
    
    //Divide Method
    public function divide() 
    {
        echo "$this->var1 / $this->var2 = ";
        return $this->var1 / $this->var2;
    }
}

//Child Class
class Remainder extends Calculate
{
    //Modulus Method
    public function modulus() 
    {
        echo "$this->var1 % $this->var2 = ";
        return $this->var1 % $this->var2;
    }
}

//Calculate Instantiation
echo "Calculations: <br>";

$calc1 = new Calculate(8, 4); 
echo $calc1->add()."<br>";
echo $calc1->multiply()."<br>";
echo $calc1->subtract()."<br>";
echo $calc1->divide()."<br>";

//Remainder Instantiation
$calc2 = new Remainder(8, 4);
echo $calc2->modulus()."<br>"; 

echo "<br>";


?>