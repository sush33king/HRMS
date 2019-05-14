<?php
//$phone = array("iphone", "oppo", "asus");
//echo "I like " . $phone[iphone] . ", " . $phone[oppo] . " and " . $phone[asus] . ".";

//$phone = array("iphone", "oppo", "asus");
//echo count($phone);

//$phone = array("iphone", "oppo", "asus");

//$arrlength = count($phone);

/*for($x = 0; $x < $arrlength; $x++) {
    echo '$x = ' . $x . "<br>";
    echo $phone[$x];
    echo "<br>";
}*/

/*$age = array("tan"=>"20", "fong"=>"19", "Joe"=>"23");
echo "tan is " . $age['tan'] . " years old.";

$age = array("tan"=>"20", "fong"=>"19", "Joe"=>"23");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}*/

/*$phone = array
  (
  array("iphone",600,2),
  array("oppo",700,2),
  array("asus",500,2),
  );

echo $phone[0][0] . ": price: " . $phone[0][1] . ", quantity: " . $phone[0][2] . "<br>";
echo $phone[1][0] . ": price: " . $phone[1][1] . ", quantity: " . $phone[1][2] . ".<br>";
echo $phone[2][0] . ": price: " . $phone[2][1] . ", quantity: " . $phone[2][2] . ".<br>";

//echo var_dump ($phone)[0] ;
$total = 0 ;
$y = count($phone);

   for ($x = 0; $x < $y; $x++ ) {
     $total = $total + ($phone[$x][1] * $phone[$x][2]);
   }  

$shoppingcart[0] = $total;
$shoppingcart[1] = $phone;

echo "<br>" ;
echo "total cost = " . "$total" ;

echo var_dump($shoppingcart);*/

$phone = array
  (
  array("iphone",1600,2),
  array("oppo",1700,2),
  array("asus",1500,2),
  );

echo $phone[0][0] . ": price: " . $phone[0][1] . ", quantity: " . $phone[0][2] . "<br>";
echo $phone[1][0] . ": price: " . $phone[1][1] . ", quantity: " . $phone[1][2] . ".<br>";
echo $phone[2][0] . ": price: " . $phone[2][1] . ", quantity: " . $phone[2][2] . ".<br>";

//echo var_dump ($phone)[0] ;
$total = 0 ;
$y = count($phone);

   for ($x = 0; $x < $y; $x++ ) {
     $total = $total + ($phone[$x][1] * $phone[$x][2]);
   }  

$shoppingcart[0] = $total;
$shoppingcart[1] = $phone;

echo "<br>" ;
echo "total cost = " . "$total" ;

echo var_dump($shoppingcart);

?>