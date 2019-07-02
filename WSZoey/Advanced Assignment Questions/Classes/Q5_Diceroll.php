<?php

Class Diceroll
{
    function Draw1()
    {
        header('Content-Type: image/gif');
        echo file_get_contents('../Images/Dice1.GIF');         
    }

    function Draw2()
    {
        header('Content-Type: image/gif');
        echo file_get_contents('../Images/Dice2.GIF');
    }

    function Draw3()
    {
        header('Content-Type: image/gif');
        echo file_get_contents('../Images/Dice3.GIF');
    }

    function Draw4()
    {
        header('Content-Type: image/gif');
        echo file_get_contents('../Images/Dice4.GIF');
    }

    function Draw5()
    {
        echo header('Content-Type: image/gif');
        echo file_get_contents('../Images/Dice5.GIF');
    }

    function Draw6()
    {
        header('Content-Type: image/gif');
        echo file_get_contents('../Images/Dice6.GIF');
    }


    function RollDice()
    {
        $x = rand(1,6);

        if ($x == 1)
        {
            $this->Draw1();
        }

        elseif ($x == 2)
        {
            $this->Draw2();
        }

        elseif ($x == 3)
        {
            $this->Draw3();
        }

        elseif ($x == 4)
        {
            $this->Draw4();
        }

        elseif ($x == 5)
        {
            $this->Draw5();
        }

        elseif ($x == 6)
        {
            $this->Draw6();
        }
    }
}












?>