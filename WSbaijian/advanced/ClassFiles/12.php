<?php 
// Creating Class
class total { 
      
    // __call is a magic function which accepts  
    // function name and multiply
    function __call($name_of_function, $multiply) { 
              
        // If function name is multiply
        if($name_of_function == 'multiply') { 
              
            switch (count($multiply)) { 
                      
                // If only two multiply
                case 2: 
                    return $multiply[0] * $multiply[1]; 
                          
                // If three multiply
                case 3: 
                   $temp = $multiply[0] * $multiply[1]; 
                   return $temp * $multiply[2];
            } 
        } 
    } 
} 
      
// Instantiate total
$cal = new total; 
      
// accept Two multiply
echo "except Two multiply: ";
echo($cal->multiply(9, 3)); //Should echo 27
echo "<br><br>"; 
      
// accept Three multiply
echo "accept Three multiply: "; 
echo ($cal->multiply(9, 6, 3)); //Should echo 162
  
?> 