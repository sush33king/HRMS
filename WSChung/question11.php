<?php

if(isset($_GET['x']) AND isset($_GET['']))
{
    $Width = $_GET['x'];
    $Height = $_GET['y'];

    for($x = 0; $x < $Width; $x++)
    {
        for($y = 0; $y < $Height; $y++)
        {
            echo('*');
        }
    }
        
       
    
    echo("</br>");
}
    
else
    echo 'Input variable not provided';

?>