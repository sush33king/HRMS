<?php

function plusten(&$var1)
{
    $var1 = $var1 + 10;
}

function dividetwo(&$var1)
{
    $var1 = $var1 / 2;
}

function multiplybyseven(&$var1)
{
    $var1 = $var1 * 7;
}

$x = 1;
plusten($x);
dividetwo($x);
multiplybyseven($x);

echo $x;








?>