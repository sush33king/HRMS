<?php

$Brands = array("Asus", "Evga", "Zotac");
//echo " <b> I would prefer </b>" . $Brands[0] . ", " . $Brands[1] . " and " . $Brands[2] . ".";

$Brands = array("Asus", "Evga", "Zotac");
//echo count($Brands);

$Brands = array("Asus", "Evga", "Zotac");
 /*$TotalNoofBrands = count($Brands);

for($x = 0; $x < $TotalNoofBrands; $x++) {
    echo "<br>_______________________________________________<br>";
    echo '$x = ' . $x;
    echo "<br>";
    echo $Brands[$x];
    echo "<br>";

    for($y = 0; $y < $TotalNoofBrands; $y++) {
        echo '$y = ' . $y;
        echo "<br>";
        echo $Brands[$y];
        echo "<br>";

        for($o = 0; $o < $TotalNoofBrands; $o++) {
            echo '$o = ' . $o;
            echo "<br>";
            echo $Brands[$o];
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

echo $ShoppingCart[0][0].": In stock: ".$ShoppingCart[0][1].", sold: ".$ShoppingCart[0][2].".<br>";
echo $ShoppingCart[1][0].": In stock: ".$ShoppingCart[1][1].", sold: ".$ShoppingCart[1][2].".<br>";

/*echo $Brands[2][0].": In stock: ".$Price[2][1].", sold: ".$Quantity[2][2].".<br>";
echo $Brands[3][0].": In stock: ".$Price[3][1].", sold: ".$Quantity[3][2].".<br>";
echo $Brands[4][0].": In stock: ".$Price[4][1].", sold: ".$Quantity[4][2].".<br>";*/

//echo var_dump ($Brands(0));
//$Total


?>