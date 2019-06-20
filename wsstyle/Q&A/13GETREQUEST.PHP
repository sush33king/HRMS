<?php
    if(isset($_GET['X']))
    {
        $x = $_GET['X'];
        $temp_char_array = str_split($x);
        $i = 0 ;
        for ($i = 0; $i < count($temp_char_array); $i++ ) 
        {
            if ($temp_char_array[$i] == "1") 
            {
                echo "L" ;
            } 
            elseif ($temp_char_array[$i] == "2") 
            {
                echo "K" ;
            } 
            elseif ($temp_char_array[$i] == "3") 
            {
                echo "C" ;
            }
            elseif ($temp_char_array[$i] == "4") 
            {
                echo "E" ;
            }
            elseif ($temp_char_array[$i] == "5") 
            {
                echo "S" ;
            }
            elseif ($temp_char_array[$i] == "6") 
            {
                echo "I" ;
            }
            elseif ($temp_char_array[$i] == "7") 
            {
                echo "U" ;
            }
            elseif ($temp_char_array[$i] == "8") 
            {
                echo "K" ;
            }
            elseif ($temp_char_array[$i] == "9") 
            {
                echo "F" ;
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