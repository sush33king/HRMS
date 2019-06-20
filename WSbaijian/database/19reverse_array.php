<?php
$num = array('1','2','4','6','8','9','14','56','75','33');
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