<?php


if(isset($_GET["width"]) && isset($_GET['height']))
{
    $width = $_GET["width"];
    $height = $_GET["height"];
    

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
    echo "Data does not exist, pls key in the data";
}

//echo "*" ."<br>"

?>
