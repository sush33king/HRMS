<?php 
class game { 
      
      
    public function __call($name, $arguments) { 
          
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "\n"; 
    } 
  
      
    public static function __callStatic($name, $arguments) { 
          
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n"; 
    } 
} 
  
// Create new object 
$obj = new game; 
  
$obj->runTest('in object context'); 
  
game::runTest('in static context'); 
  
?> 