<?php

if(isset($_GET ['w']) && isset($_GET ['h']))
{
    $width = $_GET['w'];
    $height = $_GET['h'];
    
    echo "width is " . $width;    
    echo "<br>";
    echo "height is " . $height;  
    echo "<br>";

    for($h = 0; $h <= $height; $h++ )
{
    for($w = 1; $w <= $width ; $w++)
    {
        if ($h % 2 == 0 )
        {
            echo "#";            
        }
        else
        {
            echo "*";
        }
    }
    echo "<br>";
}

}

else 
{
    echo "the";
}

?>