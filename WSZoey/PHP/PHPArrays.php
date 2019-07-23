<?php
// Indexed Arrays
/* The indexes are automatically assigned and start with 0, 
and the values can be any data type.*/
$students = array("Chung","Hoe", "Randy", "Zoey");
// This line of code is equivalent to the example below:
/*
$students[0] = "Chung"; 
$students[1] = "Hoe"; 
$students[2] = "Randy"; 
$students[3] = "Zoey";
*/
?>

<?php
// Associative Arrays
/* The keys assigned to values can be arbitrary and user defined strings. */
$ages = array("Chung"=>22, "Hoe"=>19, "Randy"=>18, "Zoey"=>17);
//This line of code is equivalent to the example below:
/*
$ages["Chung"] = "22";
$ages["Hoe"] = "19";
$ages["Randy"] = "18";
$ages["Zoey"] = "17";
*/
?>

<?php
// Multidimensional Arrays
$emailaddress = array(
    array(
        "name" => "zoey",
        "email" => "arifzoey@mail.com",
    ),
    array(
        "name" => "chung",
        "email" => "chung@mail.com",
    ),
    array(
        "name" => "randy",
        "email" => "randy@mail.com",
    )
);
// Access nested value
echo "Zoey's Email-id is: " . $emailaddress[0]["email"];
?>

<?php
/*Loop Through an Indexed Array*/
$car = array("Mercedes", "BMW", "Toyota");
$arrlength = count($car);

for($x = 0; $x < $arrlength; $x++) {
    echo $car[$x];
    echo "<br>";
}
?>

<?php
/* Loop Through an Associative Array*/
$price = array("Mercedes"=>"260000","BMW"=>"250000", "Toyota"=>"120000");
foreach($price as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>