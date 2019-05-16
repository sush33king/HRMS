<?php

//initializing array
$product = array(
array('playstation',1500,4),
array("xbox",999,1),
array("pc",90000,1),
);


//assign no of products in array to a variable
$numberofproduct = count($product);

//initializing totalcost variable = 0
$totalcost=0;

//calculate overall cost of all products
for($x = 0; $x < $numberofproduct; $x++)
{    
    $totalcost = $totalcost + ($product[$x][1]*$product[$x][2]);    
}

//assigning total cost to shoppingcart element 0
$shoppingcart[0] = $totalcost;

//assigning products to shoppingcart element 1
$shoppingcart[1] = $product;

$numberofproduct= 3 ;

while( $x < $numberofproduct ) {

$x++;
}

?>