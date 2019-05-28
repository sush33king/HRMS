
<?php
// Example 1
$pizza  = "Pepperoni";
$pieces = str_split($pizza);

for ($x = (count($pieces) - 1); $x >= 0; $x--) {
    echo $pieces[$x];
}

?>