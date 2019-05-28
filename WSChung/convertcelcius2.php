<?php


//$_GET is an array that the server will keep in memory to store browser/user input.
//If browser supplies input through the $_GET variablle, then this is technically termed as a GET REQUEST.
//Check if any input variable provided through the GET variable 'x'. 

//1. Step 1, check if input exists
if(isset($_GET['x']))
{

    //Step 2, Assign input to a variable
    $celcius = $_GET['x'];
    
    //Step3, Convert celcius to fahrenheit
    $fahrenheit = ($celcius*9/8)+32 . "°F";


    //Step 4, Echo out conversion results to browser
    echo "The Fehrenheit is : ";
    echo  $fahrenheit;

    
}
else
    echo 'Input variable not provided';

?>