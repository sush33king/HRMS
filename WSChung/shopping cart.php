<?php
$phone = array
  (
  array("iphone",6000,2),
  array("sumsung",3700,2),
  array("huawei",2500,2),
  );

$total = 0 ;
   for ($x = 0; $x < count($phone); $x++ ) {
     $total = $total + ($phone[$x][1] * $phone[$x][2]);
   }  

$shoppingcart[0] = $total;
$shoppingcart[1] = $phone;


$x = 0 ;
while ( $x < count($phone) ) {
echo "<br>";
echo  "Name " ."<b>" . $phone[$x][0] . "</b>";
echo "<br>";
echo  "price " ."<b>" . $phone[$x][1] . "</b>";
echo "<br>";
echo  "quantity" ."<b>" . $phone[$x][2] . "</b>" ;

$x++ ; 
}

?>