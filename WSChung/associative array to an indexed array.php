<?php

$price = array("Iphone"=>5000, "Sumsung"=>4000, "Xiaomi"=>1500);
$arr = [] ;
$i = 0 ;
    
foreach ($price as $k => $v ) {

        $arr[$i++]=$v;
    }
    

    print_r($arr);
?>
