<?php 
// Creating Class
class total { 
      
    // __call is a magic function which accepts  
    // function name and numbers
    function __call($name_of_function, $numbers) { 
              
        // If function name is multiply
        if($name_of_function == 'multiply') { 
              
            switch (count($numbers)) { 
                      
                // If only two numbers
                case 2: 
                    return $numbers[0] / $numbers[1]; 
                          
                // If three numbers
                case 3: 
                   $temp = $numbers[0] / $numbers[1]; 
                   return $temp / $numbers[2];
            } 
        } 
    } 
} 
      
// Instantiate total
$cal = new total; 
      
// accept Two numbers
echo "except Two numbers: ";
echo($cal->multiply(9, 3)); //Should echo 3
echo "<br><br>"; 
      
// accept Three numbers
echo "accept Three numbers: "; 
echo ($cal->multiply(9, 6, 3)); //Should echo 0.5
  
?> 