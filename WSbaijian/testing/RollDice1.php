<?php

Class RollDice
{
    
    function draw6()
    {
        $randomnumber = rand(1,6);

        $content = file_get_contents('../Dice' . $randomnumber . '.GIF');
        header('Content-Type: Downloads/gif');
        echo $content;
        
    }

}

?>