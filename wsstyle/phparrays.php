<?php
$banana = array("white banana", "black banana", "yellow banana");
echo " <b>I like</b> " . $banana[0] . ", " . $banana[1] . " and " . $banana[2] . ".";

$banana = array("white banana", "black banana", "yellow banana");
echo count($banana);

$banana = array("white banana", "black banana", "yellow banana");
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

$age = array("syed"=>"16", "lee"=>"19", "tan"=>"20");

foreach($age as $x => $x_value) {
    echo "name=" . $x . ", age=" . $x_value;
    echo "<br>";
}

$product= array("price", "qty", "name");
echo count($product);

echo '<br>__________________________________________';

$product = array(

array("banana",1.5,5);
array("carrot",3,10);
array("timun",5,13);
;
)

echo $product[0][0];
echo $product[0][1];
echo $product[0][2];




?>


 