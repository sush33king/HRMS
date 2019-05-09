<?php

/*integers and operators*/
$i = 1;
$i = $i + 3;
$j = 5;
echo $i * $j;

echo "<br>";

/*Assigning string variables with data*/
$s1 = "hello ";
$s2 = "Friend<br>";

/*String concatenationa and Passing of string data by value */
$s3 = $s1 . $s2;

$s1 = "";
$s2 = "";

/*What will browser display? */
echo $s3;

/*passing of data by reference*/
$s4 = &$s3;
$s3 = "<br><br>xxx";

/*What will the browser display? */
echo $s4;

?>