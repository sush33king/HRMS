<?php
/*$x = 1;
$y = $x;
$z = $x+$y;
echo $z;*/

$number1 = "i am outside data";
//$number2 = 90;


    sum($number1);
    echo $number1;

    function sum(&$data)
    {
    
       $data = "I am inside function and i can change outside data";
    }
?>