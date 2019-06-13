<?php
if (isset($_GET['x']))
{
    
    $letter = str_split($_GET['x']);

    for ($i=0; $i < count($letter); $i++)
    {
        switch ($letter[$i])
        {
            case 1:
            {
                echo "A";
                break;
            }
            case 2:
            {
                 echo "B";
                 break;
            }
            case 3:
            {
                echo "C";
                break;
            }
            case 4:
            {
                echo "D";
                break;
            }
            case 5:
            {
                echo "E";
                break;
            }
            case 6:
            {
                echo "F";
                break;
            }
            case 7:
            {
                echo "G";
                break;
            }
            case 8:
            {
                echo "H";
                break;
            }
            case 9:
            {
                echo "I";
                break;
            }
        }   
    }
}

?>