<?php
//make 3 variable//

$X = 20;
$Y = 11;
$Z = 50;

//min//
if ($X < $Y and $Y < $Z ) {
echo "variable X contain the smallest value";
}

if ($Y < $X and $Y < $Z ) {
    echo "variable Y contain the smallest value";
    }

else {
echo "Variable Z contains the smallest value";
}

echo "<br> <br>";

//max//
if ($X > $Y and $Y >$Z ) {
    echo "variable X contain the biggiest value";
}

if ($Y > $X and $Y > $Z ) {
echo "variable Y contain the biggest value";
}

else {
    echo "variavle Z contain the biggiest value";
}


?>

