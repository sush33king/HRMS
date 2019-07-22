<?php

//initialize data in array//
$phone = array("Iphone", "Sumsung", "LG", "Huawei", "Nokia");

//intitialize temporary storage to be used for processing//
$arr = [] ;
$i = 2 ;

//iterate over arrays//
foreach ($phone as $k => $v ) {

    $arr[$v] = $k + 0 ;
}

print_r($arr);

?>