<?php

//outside loop controlling no of rows 
for($rows = 1; $rows <= 100; $rows++)
{
    //inside loop controlling no of column characters "*" printed restricted by the row number 
    //which is reprsented by the value of $rows
    for($column = 1; $column <= $rows; $column++)
    {
        //if row no can be divided by 2, then print "#", else print "*"
        if ($rows % 2 == 0)
        {
            echo "#";            
        }
        else
        {
            echo "*";
        }
       
    }
    //after the end of every row, print a new line
    echo "<br>";
}

?>