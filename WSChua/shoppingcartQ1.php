
<?php
//initializing array//
$product = array ('iphone', 'sumsung', 'LG', 'Nokia', 'Huawei') ;
echo '<b> I like </b>' . $product[0] . ', '. $product[1] . ', ' .$product[2] .','. $product[3]. ',' .$product[4]. '.';
echo count($product) ;


//assign no of products in array to a variable//
$product = array ('iphone', 'sumsung', 'LG', 'Nokia', 'Huawei') ;
$arrlength = count($product);

for($x = 0; $x < $arrlength; $x++) {
echo $product[$x];
echo "<br>"; 
}


$price = array("iphone"=>"5800", "sumsung"=>"4500", "LG"=>"3000", "Nokia"=>"2000", "huawei"=>"3500");
echo "iphone is " . $price['iphone'] . " ringgit malaysia.";



$product = array("iphone"=>"5800", "sumsung"=>"4500", "LG"=>"3000", "Nokia"=>"2000", "huawei"=>"3500");

foreach($price as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

//quantity //
$product = array
  (
  array("iphone",5800,10),
  array("sumsung",4500,2),
  array("LG",3000,5),
  array("Nokia",2000,3 ),
  array("Huawei",3500,2),
  );


echo $product[0][0].": price: ".$product[0][1].", quantity: ".$product[0][2].".<br>";
echo $product[1][0].": price: ".$product[1][1].", quantity: ".$product[1][2].".<br>";
echo $product[2][0].": price: ".$product[2][1].", quantity: ".$product[2][2].".<br>";
echo $product[3][0].": price: ".$product[3][1].", quantity: ".$product[3][2].".<br>";
echo $product[4][0].": price: ".$product[4][1].", quantity: ".$product[4][2].".<br>";

//create shopping cart and total cost//
echo var_dump ($product)[0] ;
$total = 0 ;
   for ($x = 0; $x < count($product); $x++ ) {
     $total = $total + ($product[$x][1] * $product[$x][2]);
   }  

$shoppingcart[0] = $total;
$shoppingcart[1] = $product;

echo "<br>" ;
echo "total cost = " . "$total" ;

echo var_dump($shoppingcart);

echo ' <textarea rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
</textarea>';
?>