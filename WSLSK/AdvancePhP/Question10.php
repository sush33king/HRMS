<?php 
  
interface C 
{ 
   public function insideC(); 
} 
  
interface B    
{ 
   public function insideB(); 
} 
  
class Multiple implements B, C 
{ 
  
    // Function of the interface B 
    function insideB() 
    { 
        echo "I am in interface B"; 
    } 
  
    // Function of the interface C 
    function insideC() 
    { 
        echo "I am in interface C"; 
    } 
  
    public function insidemultiple() 
    { 
        echo "I am in inherited class"; 
    } 
} 
  
$geeks = new Multiple(); 
$geeks->insideC(); 
$geeks->insideB(); 
$geeks->insidemultiple(); 
?>