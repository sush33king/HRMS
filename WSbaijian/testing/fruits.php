<?php
$fruits = array("banana","orange","apple","durian","mangosteen");
$array = [];
$i = 0;

foreach($fruits as $x => $y )
{
    $array [$i++]=$y;
}

print_r($array);

?>