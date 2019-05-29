<?php

$Age = array("Jack"=>25, "Viola"=>19, "Lionel"=>30);
$arr = [];
$i = 0;
    
foreach ($Age as $k => $v ) {

        $arr[$i++]=$v;
    }
    
    print_r($arr);
?>