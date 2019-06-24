<?php

    for($row = 1; $row <= 100; $row++)
    {
        for($column = 1; $column <= $row; $column++)
        {
            if ($row % 2 == 0)
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