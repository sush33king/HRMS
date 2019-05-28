<?php
$fruits = array("banana","orange","apple","durian","mangosteen");
$arr = [];
$i = 0;

foreach($fruits as $k => $v)
{
     $arr[$v] = $k + 9;
}
    print_r ($arr);

?>