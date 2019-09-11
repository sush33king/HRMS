<?php

$number1 = 9 ;
$number2 = 8 ;
function mutliply (&$num1, $num2) {
    $num1 = 12 ;
    echo 'mutiply = ' . $num1 * $num2 . '<br>';
}

mutliply ($number1, $number2) ;
echo 'number 1 = ' . $number1 ;
?>

