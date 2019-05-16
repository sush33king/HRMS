<?php
$banana = array("white banana", "black banana", "yellow banana");
echo " <b>I like</b> " . $banana[0] . ", " . $banana[1] . " and " . $banana[2] . ".";

//$banana = array("white banana", "black banana", "yellow banana");
echo count($banana);

//$banana = array("white banana", "black banana", "yellow banana");
$numberofbananas = count($banana);
echo $numberofbananas . '<br>';

for($x = 0; $x < $numberofbananas; $x++) {
    echo $banana[$x];
    echo "<br>";
}
echo "<br>-----------------------------------------------------------<br>";

 echo '<textarea rows="4" cols="50">';  
 echo 'At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.';
 echo '</textarea>';

echo "<br>-----------------------------------------------------------<br>";

$age = array("syed"=>"16", "lee"=>"19", "tan"=>"20");
echo "syed is " . $age['syed'] . " years old.";

//$age = array("syed"=>"16", "lee"=>"19", "tan"=>"20");

foreach($age as $z => $z_value) {
    echo "name=" . $z . ", age=" . $z_value;
    echo "<br>";
}

$product= array("price", "qty", "name");
echo count($product);

echo '<br>__________________________________________<br>';

//start fresh
$product = array(
array('playstation',1500,4),
array("xbox",999,1),
array("pc",90000,1),
);

echo $product[0][0] . '<br>';
echo $product[0][1] . '<br>';
echo $product[0][2] . '<br><br>';

echo $product[1][0] . '<br>';
echo $product[1][1] . '<br>';
echo $product[1][2] . '<br><br>';

echo $product[2][0] . '<br>';
echo $product[2][1] . '<br>';
echo $product[2][2] . '<br>';

$numberofproduct = count($product);
$totalcost=0;

for($x = 0; $x < $numberofproduct; $x++)
{ 
   // echo $product[$x][0] . '<br>';
   // echo $product[$x][1] . '<br>';
  //  echo $product[$x][2] . '<br>';
   // echo "<br>";
    //echo $product[$x][1]*$product[$x][2] . '<br>';
    $totalcost = $totalcost + ($product[$x][1]*$product[$x][2]);
    
}
//echo "total overall cost " . $totalcost . '<br>';

$shoppingcart[0] = $totalcost;
$shoppingcart[1] = $product;

echo '<br>' . 'finished';


$product = 0;
$numberofproduct= 50;

while( $x < $numberofproduct ) {

$x++;
}





?>


 