<?php
    //1. Check if user supplied parameter through GET REQUEST
    if(isset($_GET['x']))
    {
        //2. Assign user supplied parameter to a local variable
        $x = $_GET['x'];

        //3. split contents of $x into a string array
        $temp_char_array = str_split($x);

        //echo var_dump($temp_char_array);
        $i = 0 ;

        for ($i = 0; $i < count($temp_char_array); $i++ ) 
        {

            if ($temp_char_array[$i] == "1") 
            {
                echo "A" ;
            } 
            elseif ($temp_char_array[$i] == "2") 
            {
                echo "B" ;
            } 
            elseif ($temp_char_array[$i] == "3") 
            {
                echo "C" ;
            }
            elseif ($temp_char_array[$i] == "4") 
            {
                echo "D" ;
            }
            elseif ($temp_char_array[$i] == "5") 
            {
                echo "E" ;
            }
            elseif ($temp_char_array[$i] == "6") 
            {
                echo "F" ;
            }
            elseif ($temp_char_array[$i] == "7") 
            {
                echo "G" ;
            }
            elseif ($temp_char_array[$i] == "8") 
            {
                echo "H" ;
            }
            elseif ($temp_char_array[$i] == "9") 
            {
                echo "I" ;
            }
            else{
                echo "Problem with parameters";
            } 
            }
        
        }
            else
            {
            echo "Parameter not supplied";    
    }







?>