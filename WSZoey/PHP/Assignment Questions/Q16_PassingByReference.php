<?php

//Passing By Reference
function refplusten(&$var1)
{
    $var1 = $var1 + 10;
}

//Pass by Value
function valplusten($var1)
{
    $var1 = $var1 + 10;
}

//Execute
$x = 1;
refplusten($x);

$y = 1;
valplusten($y);

//Echo
echo "Pass by Ref: " .$x . "<br><br>";
echo "Pass by Val: " .$y;




?>