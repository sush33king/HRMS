<?php
$fruits = array("bananatest","orange","apple","durian","mangosteen");
$copy_of_fruits = [];
$i = 0;

foreach($fruits as $element_index_no => $element_value )
{
    $copy_of_fruits [$i++]=$element_value;
    
    //echo "x: " . $element_index_no;
    //echo "<br>";
    //echo "y: ". $element_value;
    //echo "<br>";
    /*echo '1. $i before execute ++: ' . $i;
    echo "<br>";
    echo '2. ++$i: ' . ++$i;
    echo "<br>";
    echo '3. $i after execute ++: ' . $i;
    break;*/
}
echo "<br>";
var_dump($copy_of_fruits);

?>