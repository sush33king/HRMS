<?php
$x = 20;
$y = 8;
$z = 30;

echo "X = $x <br>";
echo "Y = $y <br>";
echo "Z = $z <br><br>";

//Min Value
if ($x < $y And $x < $z) {
    echo "Variable X ($x) contains the smallest value";
}
elseif ($y < $x And $y < $z) {
    echo "Variable Y ($y) contains the smallest value";
}

else {
    echo "Variable Z ($z) contains the smallest value";
}

echo "<br> <br>";

//Max Value
if ($x > $y And $x > $z){
    echo "Variable X ($x) contains the largest value";
}
elseif ($y > $x And $y > $z){
    echo "Variable Y ($y) contains the largest value";
}
else {
    echo "Variable Z ($z) contains the largest value";
}






?>