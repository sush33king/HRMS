<?php

//Products
$products = array(
    array("AMD Ryzen 5 2600",650,10),
    array("Intel Core i5-8400",800,10),
    array("Intel Core i7-8700K",1700,10),
    array("AMD Ryzen 7 2700X",1300,10)
    );

//Total Count
$total=0;
$z = count($products);
for($x = 0; $x <$z ; $x=$x+1) {
    $total = $total + ($products[$x][1] * $products[$x][2]);
}

//Shopping Cart
$shoppingcart[0] = $total;
$shoppingcart[1] = $products;

echo "<br>";

echo var_dump($shoppingcart)
?>