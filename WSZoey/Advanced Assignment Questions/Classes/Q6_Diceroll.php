<?php

Class Diceroll
{
    function RockAndRoll()
    {       
        header('Content-Type: image/gif');
        echo file_get_contents('../Images/Dice' . rand(1,6) . '.GIF');            
    }


    function Draw1()
    {
        header('Content-Type: image/gif');
        echo file_get_contents('C:\xampp\htdocs\Git Repo\HRMS\WSZoey\Advanced Assignment Questions\Images\Dice1.gif');
    }

    function Draw2()
    {
        header('Content-Type: image/gif');
        echo file_get_contents('C:\xampp\htdocs\Git Repo\HRMS\WSZoey\Advanced Assignment Questions\Images\Dice2.gif');
    }

    function Draw3()
    {
        header('Content-Type: image/gif');
        echo file_get_contents('C:\xampp\htdocs\Git Repo\HRMS\WSZoey\Advanced Assignment Questions\Images\Dice3.gif');
    }

    function Draw4()
    {
        header('Content-Type: image/gif');
        echo file_get_contents('C:\xampp\htdocs\Git Repo\HRMS\WSZoey\Advanced Assignment Questions\Images\Dice4.gif');
    }

    function Draw5()
    {
        echo header('Content-Type: image/gif');
        echo file_get_contents('C:\xampp\htdocs\Git Repo\HRMS\WSZoey\Advanced Assignment Questions\Images\Dice5.gif');
    }

    function Draw6()
    {
        header('Content-Type: image/gif');
        echo file_get_contents('C:\xampp\htdocs\Git Repo\HRMS\WSZoey\Advanced Assignment Questions\Images\DICE6.gif');
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

$RollDice = new Diceroll;
$RollDice-> RollDice();










?>