<?php
$products = array (
    array("AMD Ryzen 5 2600",650,10),
    array("Intel Core i5-8400",800,10),
    array("Intel Core i7-8700K",1700,10),
    array("AMD Ryzen 7 2700X",1300,10)
    );

//echo "Product:" . $products[0][0] . ", Price:" . $products[0][1] . ", Quantity:" . $products [0][2] . "<br> <br>";
//echo "Product:" . $products[1][0] . ", Price:" . $products[1][1] . ", Quantity:" . $products[1][2]  . "<br> <br>";
//echo "Product:" . $products[2][0] . ", Price:" . $products[2][1] . ", Quantity:" . $products[2][2]  . "<br> <br>";
//echo "Product:" . $products[3][0] . ", Price:" . $products[3][1] . ", Quantity:" . $products[3][2]  . "<br> <br>";

$total=0;
$z = count($products);
for($x = 0; $x <$z ; $x=$x+1) {
    $total = $total + ($products[$x][1] * $products[$x][2]);
}

$shoppingcart[0] = $total;
$shoppingcart[1] = $products;

$productname = 0;
$productprice = 0;
$productquantity = 0;
$int = count($shoppingcart[1]);
$whileint = 0;

while($whileint < $int) {
    $productname = $shoppingcart[1][$whileint][0];
    $productprice = $shoppingcart[1][$whileint][1];
    $productquantity = $shoppingcart[1][$whileint][2];
    echo $productname;
    echo " " .$productprice;
    echo " " .$productquantity. "<br> <br>";
    $whileint++;
}


//$tempshoppingcart = array ($shoppingcart[0], $shoppingcart[1]);
//$shoppingcart[0] =9999989889789;
//echo $tempshoppingcart[0];
//echo "<br>";
//echo $total;

//echo var_dump($tempshoppingcart);
?>