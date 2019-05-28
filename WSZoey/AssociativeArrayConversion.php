<?php
$Associative = array("Student", "Teacher", "Parent","Principal");

$Indexed = array_values($Associative);



for ($x = 0; $x < count($Indexed); $x++) {
    echo $Indexed[$x]. " " .$x. "<br>";

}






?>