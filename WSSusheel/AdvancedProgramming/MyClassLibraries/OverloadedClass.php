<?php 
class OverloadedTest { 
      
      
    public function __call($name, $arguments) { 
          if(count($arguments) == 1)
          {
            echo "Calling object method '$name' "
                . implode(', ', $arguments). "\n"; 
            
          }
          elseif(count($arguments) == 2)
          {
                echo "2 arguments passed";
          }
          else
          {
                echo "More than 2 arguments passed";
          }
    } 
  
      
    public static function __callStatic($name, $arguments) { 
          
        echo "Calling static method '$name' "
            . implode(', ', $arguments). "\n"; 
    } 
} 
  
// Create new object 
$obj = new OverloadedTest; 
  
$obj->runTest('in object context',2,3,4); 
  
OverloadedTest::runTest('in static context');  
  
?> 