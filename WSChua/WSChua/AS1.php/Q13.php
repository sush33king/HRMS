<?php

    //1. Step 1, check if input exists
    if(isset($_GET["x"]))
    {

        //Step 2, Assign input to a variable
        $x = $_GET["x"];
        $temp = str_split($x) ;
        //echo var_dump($temp) ;
        $i = 0;
        
        for ($i = 0; $i < count($temp); $i++ ) 
        {

            if ($temp[$i] == "1") {
                echo "A" ;
            } 
            elseif ($temp[$i] == "2") {
                echo "B" ;
            } 
            elseif ($temp[$i] == "3") {
                echo "C" ;
            }
            elseif ($temp[$i] == "4") {
                echo "D" ;
            }
            elseif ($temp[$i] == "5") {
                echo "E" ;
            }
            elseif ($temp[$i] == "6") {
                echo "F" ;
            }
            elseif ($temp[$i] == "7") {
                echo "G" ;
            }
            elseif ($temp[$i] == "8") {
                echo "H" ;
            }
            elseif ($temp[$i] == "9") {
                echo "I" ;
            }

            elseif ($temp[$i] == "10") {
                echo "J" ;
            }

            elseif ($temp[$i] == "11") {
                echo "K" ;
            }

            elseif ($temp[$i] == "12") {
                echo "L" ;
            }

            elseif ($temp[$i] == "13") {
                echo "M" ;
            }

            elseif ($temp[$i] == "13"){

            }
            
            else{
                echo "Problem with parameters";
            } 
        }
    }
    else 
    {
        echo "no input provided" ;
    }
 

?>