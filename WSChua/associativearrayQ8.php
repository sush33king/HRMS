<?php

//initialize data in array//
$phone = array("Iphone"=>5000, "Sumsung"=>4000, "LG"=>1800, "Huawei"=>2500, "Nokia"=>1500);

//intitialize temporary storage to be used for processing//
$arr = [] ;
$i = 0 ;

//iterate over arrays//
foreach ($phone as $k => $v ) 
{

        $arr[$i++]=$v;
    }
    

    print_r($arr);
?>