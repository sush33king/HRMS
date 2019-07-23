<?php

if (isset($_GET['x']) AND isset($_GET['y']))
{
    $width = $_GET['x'];
    $height = $_GET['y'];
    
    //For Loop
    for ($y = 1; $y < $height;$y++)
    {   //First Line
        if ($y < 2)
        {
            for ($x = 0; $x < $width;$x++)
            {
                echo "*";
            }
            echo "<br>";
        }
        else
        {   //Second to Sixth Line
            for ($x = 1; $x <= $width; $x++)
            {
                //Echo * until Height value is reached
                if ($x <= $y)
                {
                    echo "*";
                }
                //Echo + until one value before Width value is reached
                elseif ($x <= $width - 1)
                {
                    echo "+";
                }
                //Echo * once when Width value is reached
                elseif ($x == $width)
                {
                    echo "*";
                }
            }
            echo "<br>";
        }
    }
    //Final Line
    for ($y = 0; $y = $height; $y++)
    {
        for ($x = 0; $x < $width; $x++)
        {
            echo "*";
        }
        echo "<br>";
        break;
    }
}
//If no input:
else
{
    echo "Please input values";
}


?>