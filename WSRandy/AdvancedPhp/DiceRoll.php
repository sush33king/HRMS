<?php

Class DiceRoll{

    function draw6()
    {
        $content = file_get_contents('../Libraries/Pictures/source.GIF');
        header('Content-Type: image/gif');
        echo $content;
    }
}









?>