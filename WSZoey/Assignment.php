<?php
$products = array (
    array("AMD Ryzen 5 2600",650,10),
    array("Intel Core i5-8400",800,10),
    array("Intel Core i7-8700K",1700,10),
    array("AMD Ryzen 7 2700X",1300,10)
    );

echo "Product:" . $products[0][0] . ", Price:" . $products[0][1] . ", Quantity:" . $products[0][2] . "<br> <br>";
echo "Product:" . $products[1][0] . ", Price:" . $products[1][1] . ", Quantity:" . $products[1][2]  . "<br> <br>";
echo "Product:" . $products[2][0] . ", Price:" . $products[2][1] . ", Quantity:" . $products[2][2]  . "<br> <br>";
echo "Product:" . $products[3][0] . ", Price:" . $products[3][1] . ", Quantity:" . $products[3][2]  . "<br> <br>";

echo var_dump ($products);

$total=0;

for($x = 0; $x < count($products); $x=$x+1) {
    $total = $total + ($products[$x][1] * $products[$x][2]);
}

$shoppingcart[0] = $total;
$shoppingcart[1] = $products;

echo "<br>";

echo $total;

echo "<br>";

echo "ShoppingCart";

echo "<br>";

echo var_dump($shoppingcart);

echo '<textarea rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
</textarea>';
?>