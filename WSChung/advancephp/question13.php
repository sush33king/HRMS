<?php 

// Parent Class 
class outdoorsport { 
      
    // Parent Method 'sport'
    function sports() { 
        echo "Badminton";

    } 
} 
  
// Child Class
class indoorsport extends outdoorsport { 
      
    // Overriding Parent Method
    function sports() { 
        echo "Swimming"; 
    } 
} 
  
// Instatiation
$p = new outdoorsport; 
$c = new indoorsport; 
  
// Parent 
$p->sports();

echo "<br><br>";
  
// Child
$c->sports(); 
?> 