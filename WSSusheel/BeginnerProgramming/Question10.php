<?php






function addFunction($num1, $num2) 
{
    $sum = $num1 + $num2;
    return $sum;
}

 //________________________________________________


if(isset($_GET["x"]) and isset($_GET['y']))
{
    echo addFunction($_GET["x"], $_GET["y"]);
}
else{
    echo "Parameters not supplied";
}

?>