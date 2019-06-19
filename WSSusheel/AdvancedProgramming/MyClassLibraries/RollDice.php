<?php

Class RollDice
{
    
    function draw6()
    {
        $randomnumber = rand(1,6);

        $content = file_get_contents('../Images/Dice' . $randomnumber . '.GIF');
        header('Content-Type: image/gif');
        echo $content;
    }

}

?>