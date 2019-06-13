<?php
$num = array("1","2","4","6","8","9","14","56","75","33") ;
$array = [] ;

echo "<pre>";
print_r($num);
echo "</pre>";

for($i = count($num) - 1; $i >= 0; $i--)
{
    $array[] = $num[$i];
}

echo "<pre>";
print_r($array);
echo "</pre>";

?>