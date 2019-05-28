<?php
$word = "Malaysia" ;
$array = str_split($word);

for ($i = count($array)-1; $i >=0; $i--) 
{
    echo $array[$i];
}

?>
