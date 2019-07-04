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

class calculator implements add , subtract, divide, mutiply
{
    private $x, $y;    

    function __construct($a, $b)
    {
        $this->x = $a;
        $this->y = $b;

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




/*function add()
    {   
        echo  $this->x + $this->y ;  
        echo  $this->x + $this->y + $this->z ;
        echo  $this->x + $this->y + $this->z + $this->b ;
        echo  $this->x + $this->y + $this->z + $this->b + $this->c ;        
    }*/


    $x->add(8,5,2,4);
    $x->add(5,6,1);




?>