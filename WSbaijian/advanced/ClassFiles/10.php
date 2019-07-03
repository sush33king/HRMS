<?php
 
 interface add 
{
    function add ();
}

interface subtract
{
    function subtract();
}

interface multiply 
{
  function mutiply();
}

interface divide  
{
    function divide();
}

class calculator implements add , subtract
{
    private $x, $y;    

    function __construct($num1, $num2)
    {
        $this->x = $num1;
        $this->y = $num2;

    } 

    function add()
    {   
        echo  $this->x + $this->y ;          
    }

    function subtract()
    {   
        echo  $this->x - $this->y ;          
    }

    function mutiply()
    {
        echo  $this->x * $this->y ;
    }
    
    function divide()
    {
        echo  $this->x / $this->y ;
    }
}


//test section

$x = new calculator(100,7);
$x->add();

?>