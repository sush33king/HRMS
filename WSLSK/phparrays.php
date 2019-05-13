<?php
/*Arrays*/
$phone = array("iPhone XS", "Samsung S10", "Huawei P10");
echo "<b>I Like </b>" . $phone[0] . ", " . $phone[1] . " and " . $phone[2] . ".";
?>

<?php
/*The count() Function*/
$phone = array("iPhone XS", "Samsung S10", "Huawei P10");
echo count($phone);
?>

<?php
/*Loop Through an Indexed Array*/
$phone = array("iPhone XS", "Samsung S10", "Huawei P10");
$arrlength = count($phone);

for($x = 0; $x < $arrlength; $x++) {
    echo $phone[$x];
    echo "<br>";
}
?>

<?php
$Price = array("iPhone XS"=>"5000","Samsung S10"=>"4000", "Huawei P10"=>"3000");
echo "iPhone XS is " . " RM" . $Price['iPhone XS'];
?>

<?php
$Price = array("iPhone XS"=>"5000", "Samsung S10"=>"4000", "Huawei P10"=>"3000");

foreach($Price as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>