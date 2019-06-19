<?php
for($x = 1; $x < 100;$x++){
    for($y = 0; $y < $x; $y++){
        if($x % 2) {
        echo "*";}
        else {
        echo "#";
        }
    }

    echo "<br>";
}

?>