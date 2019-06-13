<?php

$x = array("1","15","7","1","2","5","7","8","9","66","33","8");
$duplicates = array(); 
echo var_dump(array_count_values($x));
return;
foreach(array_count_values($x) as $val => $freq) {
    if($freq > 1) 
    {
        $duplicates[] = $val;
    }
}

echo "<pre>";
print_r($duplicates);
echo "</pre>";

?>