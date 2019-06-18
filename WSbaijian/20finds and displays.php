<?php
$num = array('1','15','7','1','2','5','7','8','9','66','33','8');
$duplicates = array(); 
echo var_dump(array_count_values($num));
return;
foreach(array_count_values($num) as $val => $freq) {
    if($freq > 1) 
    {
        $duplicates[] = $val;
    }
}

echo "<pre>";
print_r($duplicates);
echo "</pre>";

?>