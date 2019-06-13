<?php
 if(isset($_GET["x"])) {
$x = $_GET["x"];

$chars = array('1' => 'a', '2' => 'b', '3' => 'c', '4' =>'d' , '5' => 'e' ,'6' =>'f';

$str = $x;
$encoded = array();
for ($i = 0; $i < strlen($str); $i++) {
   $encoded[] = $chars[$str[$i]];
}

echo implode($encoded);
 }
?>