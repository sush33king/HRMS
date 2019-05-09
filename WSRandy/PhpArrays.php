<?php

$Brands = array("Asus", "Evga", "Zotac");
echo " <b> I would prefer </b>" . $Brands[0] . ", " . $Brands[1] . " and " . $Brands[2] . ".";

$Brands = array("Asus", "Evga", "Zotac");
echo count($Brands);

$Brands = array("Asus", "Evga", "Zotac");
$arrlength = count($Brands);

for($x = 0; $x < $arrlength; $x++) {
    echo $Brands[$x];
    echo "<br>";
}

?>