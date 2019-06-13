<?php

//Creating the Array
$IntArray = array(1 , 15 , 7 , 1 , 2 , 5 , 7 , 8 , 9 , 66 , 33 , 8);

//UniqueCount
$Unique = array_unique($IntArray);
$IndexedUnique = array_values($Unique);

//Duplicate Count
$values = array_count_values($IntArray);
$IndexedValues = array_values($values);

//Displaying the uniques and duplicates
echo 'Number of Unique Items in Array: ' . count($values) . '<br><br>';

echo 'Array Items Count: <br><br>';

for($x = 0; $x < count($IndexedUnique);$x++)
{
    echo $IndexedUnique[$x] . " = " . $IndexedValues[$x] . " Copy(s) <br>";
}


?>