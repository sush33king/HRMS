<?php
$GPU = array  (
    array("1080",2000,10),
    array("2080",6000,10),
    array("1070",3000,10),
    array("2070",5000,10)
    );

$total = 0;
    for($x = 0; $x < count($GPU); $x++) {
        $total = $total + $GPU[$x][1] * $GPU[$x][2];
    }

    $ShoppingCart[0] = $total;
    $ShoppingCart[1] = $GPU;
    
    $x = 0;
    while($x < count($GPU)) 
    {
        echo "Name: " . "<b>" . $GPU[$x][0] . "</b>";
        echo "<br>";
        echo "Price: " . $GPU[$x][1];
        echo "<br>";
        echo "Quantity: " . $GPU[$x][2];
        echo "<br>";
       $x++;
     
    }

?>