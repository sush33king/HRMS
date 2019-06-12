<?php
if (isset($_GET['x']) AND isset($_GET['y']))
{
    $width = $_GET['x'];
    $height = $_GET['y'];

    for ($y = 1; $y < $height;$y++)
    {
        if ($y < 2)
        {
            for ($x = 0; $x < $width;$x++)
            {
                echo "*";
            }
            echo "<br>";
        }
        else
        {
            for ($x = 1; $x <= $width; $x++)
            {
                if ($x <= $y)
                {
                    echo "*";
                }
                elseif ($x <= $width - 1)
                {
                    echo "+";
                }
                elseif ($x == $width)
                {
                    echo "*";
                }
            }
            echo "<br>";
        }
    }
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
else
{
    echo "Please input values";
}


?>