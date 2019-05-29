<?php

$x = 90;
$y = 69;
$z = 55;

if ($x < $y And $x < $z) {
    echo "Variable X contains the smallest value";
}
elseif ($y < $x And $y < $z) {
    echo "Variable Y contains the smallest value";
}

else {
    echo "Variable Z contains the smallest value";
}

echo "<br> <br>";

if ($x > $y And $x > $z){
    echo "Variable X contains the largest value";
}
elseif ($y > $x And $y > $z){
    echo "Variable Y contains the largest value";
}
else {
    echo "Variable Z contains the largest value";
}
?>

