<?php
$car = array("BMW" => 69, "Proton"=> 66, "Audi" => 99);
$arr = [];
$i = 0;

foreach($car as $k => $v)
{
     $arr[$i++]=$v;


}
    print_r ($arr);
?>