<?php
$processor = array (
    array("AMD Ryzen 5 2600",650,20),
    array("Intel Core i5-8400",800,20),
    array("Intel Core i7-8700K",1700,20),
    array("AMD Ryzen 7 2700X",1300,20)
    );

echo "Product:" .$processor[0][0]." Price:" .$processor[0][1]." Quantity:" .$processor.[0][2]"<br>";
echo "Product:" .$processor[1][0]." Price:" .$processor[1][1]." Quantity:" .$processor.[1][2]"<br>";
echo "Product:" .$processor[2][0]." Price:" .$processor[2][1]." Quantity:" .$processor.[2][2]"<br>";
echo "Product:" .$processor[3][0]." Price:" .$processor[3][1]." Quantity:" .$processor.[3][2]"<br>";

echo var_dump ($processor[0]);
$total=0;
    for($x = 0; $x < count($processor); $x++) {
        $total = $total + $processor[$x][1];
    }
    echo "<br>";
    echo $total;
?>