<?php
$name = array("Susheel", "Chung", "Randy");

$max = 0;
$Lword = "";
 for($i = 0; $i < Count($name); $i++)
 {
    if (strlen($name[$i]) > $max)
    {
        $max = strlen($name[$i]);
        $Lword = $name[$i];
    }
}
Echo "the Longest word is ". $Lword;

?>