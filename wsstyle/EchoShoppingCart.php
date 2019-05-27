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

$numberofproducts_in_shoppingcart= count($shoppingcart[1]) ;

//echo out products in shopping cart. 
//Products is an array, therefore we must use a loop to print it out
$y=0;
while( $y < $numberofproducts_in_shoppingcart ) {
    echo $shoppingcart[1][$y][0];
    echo "<br>";
    echo $shoppingcart[1][$y][1];
    echo "<br>";
    echo $shoppingcart[1][$y][2];
    echo "<br><br><br><br>";
    $y++;    
}
echo "<br>";

//echo out total cost
echo "Total Cost is " . $shoppingcart[0] 
?>


