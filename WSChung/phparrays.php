
<?php
$phone = array ('iphone', 'sumsung', 'huawei') ;
echo '<b> I like </b>' . $phone[0] . ', '. $phone[1] . ' and ' .$phone[2] . '. ' ;
echo count($phone) ;
?>

<?php
$phone = array ('iphone', 'sumsung', 'huawei') ;
$arrlength = count($phone);

for($x = 0; $x < $arrlength; $x++) {
echo $phone[$x];
echo "<br>"; 
}
?>

<?php
$price = array("iphone"=>"6000", "sumsung"=>"3700", "huawei"=>"2500");
echo "iphone is " . $price['iphone'] . " ringgit malaysia.";
?>

<?php
$phone = array("iphone"=>"6000", "sumsung"=>"3700", "huawei"=>"2500");

foreach($price as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

<?php
$phone = array
  (
  array("iphone",6000,2),
  array("sumsung",3700,2),
  array("huawei",2500,2),
  );

echo $phone[0][0].": price: ".$phone[0][1].", quantity: ".$phone[0][2].".<br>";
echo $phone[1][0].": price: ".$phone[1][1].", quantity: ".$phone[1][2].".<br>";
echo $phone[2][0].": price: ".$phone[2][1].", quantity: ".$phone[2][2].".<br>";


echo var_dump ($phone)[0] ;
$total = 0 ;
   for ($x = 0; $x < count($phone); $x++ ) {
     $total = $total + ($phone[$x][1] * $phone[$x][2]);
   }  

$shoppingcart[0] = $total;
$shoppingcart[1] = $phone;

echo "<br>" ;
echo "total cost = " . "$total" ;

echo var_dump($shoppingcart);

echo ' <textarea rows="4" cols="50">
At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
</textarea>';
?>