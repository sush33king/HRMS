<?php 
  
// Creating Class
class Calculator { 
      
    // __call is a magic function which accepts  
    // function name and arguments 
    function __call($name_of_function, $arguments) { 
              
        // If function name is multiply
        if($name_of_function == 'multiply') { 
              
            switch (count($arguments)) { 
                      
                // If only two arguments
                case 2: 
                    return $arguments[0] * $arguments[1]; 
                          
                // If three arguments
                case 3: 
                   $temp = $arguments[0] * $arguments[1]; 
                   return $temp * $arguments[2];
            } 
        } 
    } 
} 
      
// Instantiate Calculator
$cal = new Calculator; 
      
// Multiply Two Arguments
echo "Multiply Two Arguments: ";
echo($cal->multiply(4, 2)); //Should echo 8
echo "<br><br>"; 
      
// Multiply Three Arguments
echo "Multiply Three Arguments: "; 
echo ($cal->multiply(4, 2, 2)); //Should echo 16
?> 