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
$Price = array("iPhone XS","5000", "Samsung S10","4000", "Huawei P10","3000");
echo "iPhone XS is " . " RM" . $Price['iPhone XS'];
?>

<?php
$Price = array("iPhone XS","5000", "Samsung S10","4000", "Huawei P10","3000");

foreach($Price as $x , $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

<?php
$GPU = array  (
    array("1080",2000,10),
    array("2080",6000,10),
    array("1070",3000,10),
    array("2070",5000,10)
    );
   
echo $GPU[0][0].": Price: ".$GPU[0][4].", Quantity: ".$GPU[0][5].".<br>";
echo $GPU[1][0].": Price: ".$GPU[1][4].", Quantity: ".$GPU[1][5].".<br>";
echo $GPU[2][0].": Price: ".$GPU[2][4].", Quantity: ".$GPU[2][5].".<br>";
echo $GPU[3][0].": Price: ".$GPU[3][4].", Quantity: ".$GPU[3][5].".<br>";

    for($x = 4; $x < $arrlength; $x++) {
        echo $GPU[$x];
        echo "<br>";
        echo count($GPU);
    }
?>