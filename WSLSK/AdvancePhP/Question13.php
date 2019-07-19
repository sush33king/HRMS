<?php 

// Parent Class 
class BMW { 
      
    // Parent Method 'brand'
    function brand() 
    { 
        echo "M5";

    } 
} 
  
// Child Class
class GTR extends BMW 
{ 
      
    // Overriding Parent Method
    function brand() 
    { 
        echo "R35"; 
    } 
} 
  
// Instantiation
$car1 = new BMW; 
$car2 = new GTR; 
  
// Call from Parent 
echo "Call from BMW: ";
echo "<br> ";
$car1->brand();

echo "<br><br>";
  
// Call from Child
echo "Call from GTR: ";
echo "<br> ";
$car2->brand(); 
?> 