<?php
if (isset($_GET['x']) AND isset($_GET['y']))
{
    $Value1 = $_GET['x'];
    $Value2 = $_GET['y'];

    function getSum($Value1, $Value2)
    {
        $Sum = $Value1 + $Value2;
        
        return $Sum;
    }

    $temp = getSum($Value1,$Value2);
    echo $temp;

}




?>