<?php

$number1 = 9 ;
$number2 = 8 ;
function add (&$num1, $num2) {
    $num1 = 12 ;
    echo $num1 + $num2 ;
}

add ($number1, $number2) ;
echo $number1 ;
?>