<?php
$num = array('1','2','3','4','5','6','7','8','9','10');
$array = [];
print_r($num);
for ($i = count($num)-1; $i >=0; $i--) 
{
     $array[] = $num[$i];
}
echo '<br>';
print_r($array) ;
echo '<br>';
?>