<?php
$word = array ('1','2','4','6','8','9','14','56','75','33');
$array = [];

print_r($word);

for ($i = count($word)-1; $i >=0; $i--)
{
     $array[] = $word[$i];
}
echo '<br>';
print_r($array);
echo '<br/>';
?>