<?php

$Brands = array("Asus", "Evga", "Zotac");
//echo " <b> I would prefer </b>" . $Brands[0] . ", " . $Brands[1] . " and " . $Brands[2] . ".";

$Brands = array("Asus", "Evga", "Zotac");
//echo count($Brands);

$Brands = array("Asus", "Evga", "Zotac");
$TotalNoofBrands = count($Brands);

for($x = 0; $x < $TotalNoofBrands; $x++) {
    echo "<br>_______________________________________________<br>";
    echo '$x = ' . $x;
    echo "<br>";
    echo $Brands[$x];
    echo "<br>";

    for($y = 0; $y < $TotalNoofBrands; $y++) {
        echo '$y = ' . $y;
        echo "<br>";
        echo $Brands[$y];
        echo "<br>";

        for($o = 0; $o < $TotalNoofBrands; $o++) {
            echo '$o = ' . $o;
            echo "<br>";
            echo $Brands[$o];
            echo "<br>";
        }
    }
}
echo "yaaay out of loop";



?>