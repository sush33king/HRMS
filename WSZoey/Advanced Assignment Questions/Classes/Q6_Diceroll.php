<?php

Class Diceroll
{
    function Draw1()
    {
        echo "*";
    }

    function Draw2()
    {
        echo "**";
    }

    function Draw3()
    {
        echo "***";
    }

    function Draw4()
    {
        echo "****";
    }

    function Draw5()
    {
        echo "*****";
    }

    function Draw6()
    {
        echo "******";
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
echo $RollDice-> RollDice();










?>