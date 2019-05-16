<?php

    for($i = 1; $i <= 100; $i++)
    {
        for($j = 1; $j <= $i; $j++)
        {
            if ($i % 2 == 0)
            {
                echo "*";            
            }
            else
            {
                echo "!";
            }
        }
        echo "<br>";
    }
?>