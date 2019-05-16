<?php

/*1. integers and operators*/
$i = 1;
$i = $i + 3;
$j = 5;
echo $i * $j;

echo "<br>";

/*2. Assigning string variables with data*/
$s1 = "hello ";
$s2 = "Friend";

/*3. String concatenation and Passing of string data BY VALUE, i.e CLONING */
$s3 = $s1 . $s2;

$s1 = "";
$s2 = "";

/*4. What will browser display? */
echo $s3;

//go to next line
echo "<br>";



//go to next line twice
$s3 = "<br><br>";

/*5. passing of data BY REFERENCE*/
$s4 = &$s3;


/*6. What will the browser display? */
$s3 = "THIS IS THE NEW ME";
echo $s4;

?>