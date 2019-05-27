<?php
$game = array("dota_2","gta_5","lol","superman","jason");

$max = 0;
$longestword = ""; 

 for($i = 0; $i < count($game) ; $i++)
    {
     if(count ($game[$i]) > $max)
        {
         $max = count ($game[$i]);
         $longestword = $game[$i];

        }
    }



?>