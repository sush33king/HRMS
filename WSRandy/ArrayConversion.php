<?php

$age = array("Jack"=>25, "Viola"=>19, "Lionel"=>30); //associative array
$temparr = [];//indexed array
$i = 0;
    
foreach ($age as $key => $value ) {

        //$temparr[$i++]=$v;
        echo "key: " . $key;
        echo "<br>";
        echo "val: " . $value;
        echo "<br>";

        $temparr[$i][0] = $key;
        $temparr[$i][1] = $value;
        $i++; //$i=$i+1
    }
    
    var_dump($temparr);
?>