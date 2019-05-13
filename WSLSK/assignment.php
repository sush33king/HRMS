<?php
$GPU = array  (
    array("1080",2000,10),
    array("2080",6000,10),
    array("1070",3000,10),
    array("2070",5000,10)
    );
   
echo $GPU[0][0].": Price: ".$GPU[0][1].", Quantity: ".$GPU[0][2].".<br>";
echo $GPU[1][0].": Price: ".$GPU[1][1].", Quantity: ".$GPU[1][2].".<br>";
echo $GPU[2][0].": Price: ".$GPU[2][1].", Quantity: ".$GPU[2][2].".<br>";
echo $GPU[3][0].": Price: ".$GPU[3][1].", Quantity: ".$GPU[3][2].".<br>";


echo var_dump ($GPU[0]);
$total=0;
    for($x = 0; $x < count($GPU); $x++) {
        $total = $total + $GPU[$x][1] *  $GPU[$x][2];
    }
    echo "<br>";
    echo $total;
?>