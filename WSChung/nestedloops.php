<?php

for ($size = 1; $size <= 100; $size++){

for ($odd = 1; $odd <= 5 -$size; $odd++){
echo "";
}

for ($odd = 1; $odd <= 2*$size - 1; $odd++){
echo("!");
}

echo "<br>";

for ($even = 1; $even <= 4 -$size; $even++){
echo "";
}
    
for ($even = 1; $even <= 3*$size - 1; $even++){
echo("*");
}

echo "<br>";
}

?>