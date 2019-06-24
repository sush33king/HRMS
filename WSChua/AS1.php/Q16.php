<?php

$number1 = 10 ;
$number2 = 7 ;
function mutliply (&$num1, $num2) {
    $num1 = 12 ;
    echo $num1 * $num2 ;
}

mutliply ($number1, $number2 );
echo $number1 ;

?>
