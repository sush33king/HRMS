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
    private $one, $two;    

    function __construct($num1, $num2)
    {
        $this->one = $num1;
        $this->two = $num2;

    } 

    function add()
    {   
        echo  $this->one + $this->two ;          
    }

    function subtract()
    {   
        echo  $this->one - $this->two ;          
    }

    function mutiply()
    {
        echo  $this->one * $this->two ;
    }
    
    function divide()
    {
        echo  $this->one / $this->two ;
    }
}


//test section

$one = new calculator(100,7);
$one->add();

function add()
    {   
        echo  $this->one + $this->two ;  
        echo  $this->one + $this->two + $this->three ;
        echo  $this->one + $this->two + $this->three + $this->num2 ;
        echo  $this->one + $this->two + $this->three + $this->num2 + $this->num3 ;        
    }


    $one->add(8,5,2,4);
    $one->add(5,6,1);

?>