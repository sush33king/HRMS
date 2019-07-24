<?php

//Array
$nums = [8,5,42,6,7,9,1];

//Sorting in Ascending Order
for ($digit = 0; $digit < count($nums); $digit++)
{
    for ($y = 0; $y < count($nums); $y++)
    {
        if ($nums[$digit] < $nums[$y])
        {
            $temp = $nums[$digit];
            $nums[$digit] = $nums[$y];
            $nums[$y] = $temp;
        }
    }
}

for ($x = 0; $x < count($nums); $x++)
{
    echo $nums[$x] . "<br>";
}




?>