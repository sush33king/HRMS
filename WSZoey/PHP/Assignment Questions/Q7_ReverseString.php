
<?php
//String
$pizza  = "Pepperoni";

//String is split into array
$pieces = str_split($pizza);

//String is echoed out in reverse using for loop
for ($x = (count($pieces) - 1); $x >= 0; $x--) {
    echo $pieces[$x];
}


?>