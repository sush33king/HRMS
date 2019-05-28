<?php


//$_GET is an arra that the server will keep in memor to store browser/user input.
//If browser supplies input through the $_GET variablle, then this is technicall termed as a GET REQUEST.
//Check if an input variable provided through the GET variable 'x'. 
//1. Step 1, check if input exists

if(isset($_GET['x']) && isset($_GET['']))
{
    //Step 2, Assign input to a variable
    $Width = $_GET['x'];
    $Height = $_GET['y'];

    //Step3
    for($x = 0; $x < $Width; $x++)
    {
        for($y = 0; $y < $Height; $y++) {
            echo('*');
        }
    }
        
       
    
    echo("</br>");
}
    
else
    echo 'Input variable not provided';

?>