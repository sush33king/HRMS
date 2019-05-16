
<?php
$phone = array ('iphone', 'sumsung', 'LG', 'Nokia', 'Huawei') ;
echo '<b> I like </b>' . $phone[0] . ', '. $phone[1] . ', ' .$phone[2] .','. $phone[3]. ',' .$phone[4]. '.';
echo count($phone) ;
?>

<?php
$phone = array ('iphone', 'sumsung', 'LG', 'Nokia', 'Huawei') ;
$arrlength = count($phone);

for($x = 0; $x < $arrlength; $x++) {
echo $phone[$x];
echo "<br>"; 
}
?>

<?php
$price = array("iphone"=>"5800", "sumsung"=>"4500", "LG"=>"3000", "Nokia"=>"2000", "huawei"=>"3500");
echo "iphone is " . $price['iphone'] . " ringgit malaysia.";
?>

<?php
$phone = array("iphone"=>"5800", "sumsung"=>"4500", "LG"=>"3000", "Nokia"=>"2000", "huawei"=>"3500");

foreach($price as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

<?php
$phone = array
  (
  array("iphone",5800,10),
  array("sumsung",4500,2),
  array("LG",3000,5),
  array("Nokia",2000,3 ),
  array("Huawei",3500,2),
  );

echo $phone[0][0].": price: ".$phone[0][1].", quantity: ".$phone[0][2].".<br>";
echo $phone[1][0].": price: ".$phone[1][1].", quantity: ".$phone[1][2].".<br>";
echo $phone[2][0].": price: ".$phone[2][1].", quantity: ".$phone[2][2].".<br>";
echo $phone[3][0].": price: ".$phone[3][1].", quantity: ".$phone[3][2].".<br>";
echo $phone[4][0].": price: ".$phone[4][1].", quantity: ".$phone[4][2].".<br>";


?>