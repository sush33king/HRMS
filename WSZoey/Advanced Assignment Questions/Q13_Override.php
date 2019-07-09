<?php 

// Parent Class 
class ParentC { 
      
    // Parent Method 'Family'
    function family() { 
        echo "Parent";

    } 
} 
  
// Child Class
class ChildC extends ParentC { 
      
    // Overriding Parent Method
    function family() { 
        echo "Child"; 
    } 
} 
  
// Instatiation
$p = new ParentC; 
$c = new ChildC; 
  
// Call from Parent 
echo "Call from Parent: ";
echo "<br> ";
$p->family();

echo "<br><br>";
  
// Call from Child
echo "Call from Child: ";
echo "<br> ";
$c->family(); 
?> 