<?php

//Associative Array
$Associative = array("Student" => "35", 
                     "Teacher" => "12", 
                     "Parent" => "70",
                     "Principal" => "1");


echo "Associative Array: <br>";
echo var_dump($Associative);

echo "<br>";

//Conversion to Indexed
$Indexed = array_values($Associative);

echo "Indexed Array: <br>";
echo var_dump($Indexed);

?>