<?php
$phone = array
  (
  array("<b>iphone</b>",6000,2),
  array("<b>sumsung</b>",3700,2),
  array("<b>huawei</b>",2500,2),
  );

echo $phone[0][0].": price: ".$phone[0][1].", quantity: ".$phone[0][2].".<br>";
echo $phone[1][0].": price: ".$phone[1][1].", quantity: ".$phone[1][2].".<br>";
echo $phone[2][0].": price: ".$phone[2][1].", quantity: ".$phone[2][2].".<br>";

$total = 0 ;
   while ($x = 0; $x < count($phone); $x++ ) {
     $total = $total + ($phone[$x][1] * $phone[$x][2]);
   }  

?>