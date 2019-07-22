<?php
 function multiply ($val1 , $val2)
{
    $mutliply = $val1 * $val2 ;
    return $multiply ;
}

$a = 5;
$b = 10;
function add()
{
global $a, $b;
$b = $a + $b;
$c = 5;
}
add();

class car
{
    const PI = honda;

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}

echo car::PI;
?>
