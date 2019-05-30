<?php
$FRUITS = array("BANANA","ORANGE","APPLE","DURIAN","MANGOSTEEN");
$array = [];
$i = 0;
foreach($FRUITS as $x => $y )
{
    $array [$i++]=$y;
}
print_r($array);
?>