<?php

if(isset($_GET['w']) && isset($_GET['h']))
{
    //Step 2, Assign input to a variable
    $width = $_GET['w'];
    $height = $_GET['h'];

    echo "width is " . $width;    
    echo "<br>";
    echo "height is " . $height;  
    /*foreach ($i = 0 < $width("a") & $height("b"))
    {
        echo "*" ;$i 
    }*/
}
else
{
    echo "Parameters not supplied in GET REQUEST";
}

//print out rectangle or square based on values stored in $width and $height

echo "<br>";
for($r = 0; $r <= $height; $r++ )
{
    for($c = 1; $c <= $width ; $c++)
    {
        if ($r % 2 == 0 )
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

?>