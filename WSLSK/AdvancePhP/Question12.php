<?php 
// Create Class
class Cal  
{ 
      
    // __call is a function which accepts function name and variable
    function __call($name_of_function, $Variable1) { 
              
        // If function name is multiply
        if($name_of_function == 'multiply') { 
              
            switch (count($Variable1)) { 
                      
                // If only two 
                case 2: 
                    return $Variable1[0] + $Variable1[1]; 
                          
                // If three 
                case 3: 
                   $temp = $Variable1[0] * $Variable1[1]; 
                   return $temp * $Variable1[2];
            } 
        } 
    } 
} 
      
$cal = new Cal; 
      
// Add
echo "Add: ";
echo($cal->multiply(5, 5)); //Show 10
echo "<br><br>"; 
      
// Multiply 
echo "Multiply: "; 
echo ($cal->multiply(2, 2, 2)); //Show 8
?> 