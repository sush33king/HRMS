<?php
$product = array
(
    array("iphone",5800,10),
    array("sumsung",4500,2),
    array("LG",3000,5),
    array("Nokia",2000,3 ),
    array("Huawei",3500,2),
    );

$total = 0 ;
   for ($x = 0; $x < count($product); $x++ ) {
     $total = $total + ($product[$x][1] * $product[$x][2]);
   }  

$shoppingcart[0] = $total;
$shoppingcart[1] = $product;


$x = 0 ;
while ( $x < count($product) ) {
echo "<br>";
echo  "Name " ."<b>" . $product[$x][0] . "</b>";
echo "<br>";
echo  "price " ."<b>" . $product[$x][1] . "</b>";
echo "<br>";
echo  "quantity" ."<b>" . $product[$x][2] . "</b>" ;

$x++ ; 
}

?>