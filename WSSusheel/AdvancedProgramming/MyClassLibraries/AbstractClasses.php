<?php 
  
// Abstract class 
abstract class Base 
{ 
    function __construct() 
    { 
        echo "this is abstrct class constructor "; 
    } 
  
    // This is abstract function 
    abstract function printdata(); 
} 


class Derived extends Base 
{ 
    function __construct() 
    { 
        echo "\n Derived class constructor"; 
    } 

    function printdata() 
    { 
        echo "\n Derived class printdata function"; 
    } 

    function sayHello()
    {
        echo "say hello";
    }

   
} 

$b1 = new Derived; 
$b1->sayHello();

?> 