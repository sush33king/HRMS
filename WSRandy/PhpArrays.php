<?php

$ShoppingCart = array("Asus", "Evga", "Zotac");
//echo " <b> I would prefer </b>" . $ShoppingCart[0] . ", " . $ShoppingCart[1] . " and " . $ShoppingCart[2] . ".";

$ShoppingCart = array("Asus", "Evga", "Zotac");
//echo count($ShoppingCart);

$ShoppingCart = array("Asus", "Evga", "Zotac");
 /*$TotalNoofShoppingCart = count($ShoppingCart);

for($x = 0; $x < $TotalNoofShoppingCart; $x++) {
    echo "<br>_______________________________________________<br>";
    echo '$x = ' . $x;
    echo "<br>";
    echo $ShoppingCart[$x];
    echo "<br>";

    for($y = 0; $y < $TotalNoofShoppingCart; $y++) {
        echo '$y = ' . $y;
        echo "<br>";
        echo $ShoppingCart[$y];
        echo "<br>";

        for($o = 0; $o < $TotalNoofShoppingCart; $o++) {
            echo '$o = ' . $o;
            echo "<br>";
            echo $ShoppingCart[$o];
            echo "<br>";
        }
    }
}
echo "yaaay out of loop";*/
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

echo var_dump($ShoppingCart);

echo $Products[0][0].": Price: ".$Products[0][1].", Quantity: ".$Products[0][2].".<br>";
echo $Products[1][0].": Price: ".$Products[1][1].", Quantity: ".$Products[1][2].".<br>";
echo $Products[2][0].": Price: ".$Products[2][1].", Quantity: ".$Products[2][2].".<br>";
echo $Products[3][0].": Price: ".$Products[3][1].", Quantity: ".$Products[3][2].".<br>";
echo $Products[4][0].": Price: ".$Products[4][1].", Quantity: ".$Products[4][2].".<br>";

echo ' <textarea rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
</textarea>';

?>