<?php
for($rou = 1; $rou <= 100; $rou++)
{
    for($coluna = 1; $coluna <= $rou; $coluna++)
    {
        if ($rou % 2 == 0)
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