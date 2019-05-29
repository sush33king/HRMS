<?php
$game = array("gta_5","garena","touch") ;
$arr = [];
$i = 0 ;

    foreach ($game as $x => $y ) {

        $arr[$y] = $x + 0 ;
    }

    print_r($arr);

?>