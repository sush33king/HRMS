<?php


//$_GET is an array that the server will keep in memory to store browser/user input.
//If browser supplies input through the $_GET variablle, then this is technically termed as a GET REQUEST.
//Check if any input variable provided through the GET variable 'x'. 

if(isset($_GET['x'] & $_GET['y']))
{
    //1. You can directly access the contents of the input variables
    //echo "Total: " . ($_GET['x']);
    //echo "<br>";

    //2. Display in browser the number of inputs provided
    echo "There are " . count($_GET) . " input variables initialized";
    echo "<br>";

    //3. Loop through the 
    echo "The inputs are : ";
    echo "<br>";

    echo "Variable x is " . $_GET['x'];
    echo "<br>";
    echo "Variable y is " . $_GET['y'];
}
else
    echo 'Input variable not provide';

?>