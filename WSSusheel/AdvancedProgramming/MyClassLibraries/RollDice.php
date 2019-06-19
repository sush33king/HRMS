<?php

Class RollDice
{
    function draw1()
    {
        echo"____________
            |           |
            |    *      |
            |           |
            |___________|            ";
    }

    function draw2()
    {
        
    }

    function draw3()
    {
        
    }

    function draw4()
    {
        
    }

    function draw5()
    {
        
    }

    function draw6()
    {
        $content = file_get_contents('../Images/Dice6.GIF');
        header('Content-Type: image/gif');
        echo $content;
    }




}

?>