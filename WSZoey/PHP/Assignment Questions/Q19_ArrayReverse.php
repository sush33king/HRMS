<?php

//Creating the Array
$array = array(1 , 2 , 4 , 6 , 8 , 9 , 14 , 56 , 75 , 33);

//For loop to echo out the initial array
echo "Initial Array: <br>";

for($x = 0; $x < count($array); $x++)
{
    echo $array[$x];
    echo " ";
}

//White Space
echo "<br>";
echo "<br>";

//Copy of array
$reversearray = [];

//Reversing the Array

$y = 0;

for($x = 9; $x >= 0; $x--)
{
    $reversearray[$y] = $array[$x];
    $y++;
}

//For loop to echo out the reversed array
echo "Reversed Array: <br>";
for($x = 0; $x < count($reversearray); $x++)
{
    echo $reversearray[$x];
    echo " ";
}












?>