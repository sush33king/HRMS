<?php
$GAMES = array("FARCRY5","PUBG","RAINBOW6") ;
$arr = [];
$i = 0 ;
    foreach ($GAMES as $X => $Y ) {
        $arr[$Y] = $X + 0 ;
    }
    print_r($arr);
?>