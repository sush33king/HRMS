<?php
//1. creating products array
$Products = array(
    array("Asus",1800,5),
    array("Evga",1900,4),
    array("Zotac",1500,7),
    array("Nvidia",1800,7),
    array("Galax",1500,6)
    );

//2. loop through products array and calculate total overall cost for products
    $Total = 0;

    $p = count($Products);

for($z = 0; $z < $p ; $z++) {
    $Total = $Total + $Products[$z][1] * $Products[$z][2];
}
echo "<br>";

$TotalCost = $Total;

//3. Create a shoppingcart variable to hold/contain 1 and 2
$ShoppingCart[0] = $TotalCost;
$ShoppingCart[1] = $Products;

echo $ShoppingCart[0];
$z = 0;
while( $z <  $p) {
    echo $Products[$z][0];
    echo $Products[$z][1];
    echo $Products[$z][2];
    $z++;
    echo "<br>";
}


?>