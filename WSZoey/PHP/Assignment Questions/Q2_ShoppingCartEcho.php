<?php
//Products Array
$products = array (
    array("AMD Ryzen 5 2600",650,10),
    array("Intel Core i5-8400",800,10),
    array("Intel Core i7-8700K",1700,10),
    array("AMD Ryzen 7 2700X",1300,10),
    array("AMD Ryzen 7 2700X second edition",1300,10)
    );

//Total
$total=0;
$z = count($products);
for($x = 0; $x <$z ; $x=$x+1) {
    $total = $total + ($products[$x][1] * $products[$x][2]);
}

//Shopping Cart Array
$shoppingcart[0] = $total;
$shoppingcart[1] = $products;

//While loop to echo products
$shoppingcartcontent = 0;
$int = count($shoppingcart[1]);
$whileint = 0;

while($whileint < $int) {
    $shoppingcartcontent = "<strong>" .
    $shoppingcart[1][$whileint][0]."</strong> <br>". 
    " RM" .$shoppingcart[1][$whileint][1]. "<br>" . 
    $shoppingcart[1][$whileint][2]. " Units<br><br>";
    
    echo $shoppingcartcontent;
    $whileint++;
}

//Echo total
echo "<strong> Total: </strong> RM".$shoppingcart[0]. "<br> <br>";

?>