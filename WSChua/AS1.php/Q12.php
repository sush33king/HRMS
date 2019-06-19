<?php



if(isset($_GET["x"]) and isset($_GET['y']))
{
    echo addFunction($_GET["x"], $_GET["y"]);
}


function addFunction($num1, $num2) 
{
    $sum = $num1 + $num2;
    return $sum;
}


function add ($x,$y)
{
    $ans = $x,$y 
    return $ans;
    
}

?>