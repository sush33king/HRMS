<?php

if(isset($_GET['c']) && isset($_GET['r']))
{
    $width = $_GET['c'];
    $height = $_GET['r'];

    echo "width is " . $width;    
    echo "<br>";
    echo "height is " . $height;  
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

}
else
{
echo 'Parameters not supplied in GET REQUEST'
}

?>