<?php 
  
class area { 
      
    // __call is a magic function which accepts  
    // function name and arguments 
    function __call($name_of_function, $arguments) { 
              
        // If function name is multiply
        if($name_of_function == 'multiply') { 
              
            switch (count($arguments)) { 
                      
                // If only two arguments area is square
                case 2: 
                    return $arguments[0] * $arguments[1]; 
                          
                // If three arguments area is triangle
                case 3: 
                   $temp = $arguments[0] * $arguments[1]; 
                   return $temp * $arguments[2];
            } 
        } 
    } 
} 
      
// Instantiate area
$area = new area; 
      
// Multiply Two Arguments
echo "the area of square: ";
echo($area->multiply(9, 4)); //Should echo 36
echo "<br><br>"; 
      
// Multiply Three Arguments
echo "the area of triangle: "; 
echo ($area->multiply(9, 4, 0.5)); //Should echo 18
?> 

