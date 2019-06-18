<?php
if(isset($_GET["w"]) And isset($_GET['h']))
{
    $width = $_GET['w'];
    $height = $_GET['h'];
    
    for($row = 1; $row <= $height; $row++)
    {
        //first row and last row fill up line with ******
        if($row==1 Or $row == $height)
        {
            for($column = 1; $column <= $width; $column++)
            {
                echo "*";
            }

        }

        //print out the inner triangle shape
        if($row > 1 And $row < $height)
        {
            for($column = 1; $column <= $width; $column++)
            {
                if($column <= $row)//inner triangle using "*" character
                {
                    echo "*";
                }
                elseif($column <= $width -1) //fill up remainder of square with "+" instead of " " to make it clearer to see
                {
                    echo "<span style='color:#fff;'>*</span>";;
                }
                elseif($column==$width) // when reach last position in column, print "*"
                {
                    echo "*";        
                }
            }
        }

        
        echo "<br>";
    }


}
?>






























