<?php
for($H = 1; $H <= 100; $H++)
{
    for($coluna = 1; $coluna <= $H; $coluna++)
    {
        if ($H % 2 == 0)
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