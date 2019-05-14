<?php
$GPU = array  (
    array("<b>1080</b>",2000,10),
    array("<b>2080</b>",6000,10),
    array("<b>1070</b>",3000,10),
    array("<b>2070</b>",5000,10)
    );
   
echo $GPU[0][0].": Price: ".$GPU[0][1].", Quantity: ".$GPU[0][2].".<br>";
echo $GPU[1][0].": Price: ".$GPU[1][1].", Quantity: ".$GPU[1][2].".<br>";
echo $GPU[2][0].": Price: ".$GPU[2][1].", Quantity: ".$GPU[2][2].".<br>";
echo $GPU[3][0].": Price: ".$GPU[3][1].", Quantity: ".$GPU[3][2].".<br>";




$total = 0;
    for($x = 0; $x < count($GPU); $x++) {
        $total = $total + $GPU[$x][1] * $GPU[$x][2];
    }

    $ShoppingCart[0] = $total;
    $ShoppingCart[1] = $GPU;

    echo "<br>";
    echo $total;
    

?>