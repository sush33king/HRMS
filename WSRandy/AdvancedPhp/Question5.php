<?php

Class RollDice
{
    function Draw1()
    {
        header('Content-Type: image/png');
        echo file_get_contents('images/dice1.png');
    }

    function Draw2()
    {
        header('Content-Type: image/png');
        echo file_get_contents('images/dice2.png');
    }

    function Draw3()
    {
        header('Content-Type: image/png');
        echo file_get_contents('images/dice3.png');
    }

    function Draw4()
    {
        header('Content-Type: image/png');
        echo file_get_contents('images/dice4.png');
    }

    function Draw5()
    {
        header('Content-Type: image/png');
        echo file_get_contents('images/dice5.png');
    }

    function Draw6()
    {
        header('Content-Type: image/png');
        echo file_get_contents('images/dice6.png');
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

$x = new RollDice;
$x->RollDice();




?>