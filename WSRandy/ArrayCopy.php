<?php

$fruits = array("Banana", "orange","apple","durian","mangosteen");
$copyoffruits = array();
$i = 0;

for ($i = 0; $i < count($fruits); $i++){

        $copyoffruits[$i]=$fruits[$i];
} 

echo var_dump($copyoffruits);

?>       