<?php
if (isset($_GET['x']) AND isset($_GET['y']))
{
    $width = $_GET['x'];
    $height = $_GET['y'];

    for ($y = 0; $y < $height;$y++)
    {
        for ($x = 0; $x < $width;$x++)
        { 
            echo "*";
        }
        echo "<br>";
    }
}
else
{
    echo "Please input values";
}


?>