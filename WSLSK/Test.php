<?php
$char = '*';
$input = 10;

for($i = 0; $i <= $input; $i++) {
    for($j = 1; $j <= $input - $i; $j++) {
        echo " &nbsp&nbsp";
    }
    for($j = 1; $j <= $i; $j++) {
        echo " $char";
    }
    echo "<br>";
}
?>