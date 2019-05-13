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

$Products = array(
    array("Asus",1800,5),
    array("Evga",1900,4),
    array("Zotac",1500,7),
    array("Nvidia",1800,7),
    array("Galax",1500,6)
    );
$Total = 0;

for($z = 0; $z < count($Products) ; $z++) {
    $Total = $Total + $Products[$z][1] * $Products[$z][2];
}
echo "<br>";

$TotalCost = $Total;
$ShoppingCart[0] = $TotalCost;
$ShoppingCart[1] = $Products;

echo var_dump($ShoppingCart);

echo $ShoppingCart[0][0].": Price: ".$ShoppingCart[0][1].", Quantity: ".$ShoppingCart[0][2].".<br>";
echo $ShoppingCart[1][0].": Price: ".$ShoppingCart[1][1].", Quantity: ".$ShoppingCart[1][2].".<br>";

/*echo $ShoppingCart[2][0].": Price: ".$Price[2][1].", Quantity: ".$Quantity[2][2].".<br>";
echo $ShoppingCart[3][0].": Price: ".$Price[3][1].", Quantity: ".$Quantity[3][2].".<br>";
echo $ShoppingCart[4][0].": Price: ".$Price[4][1].", Quantity: ".$Quantity[4][2].".<br>";*/

//echo var_dump ($ShoppingCart(0));
//$Total

echo ' <textarea rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
</textarea>';

?>