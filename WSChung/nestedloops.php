<?php

for ($size = 1; $size <= 100; $size++){

for ($even = 1; $even <= 4 -$size; $even++){
echo "";
}
    
for ($even = 1; $even <= 2 * $size - 2; $even++){
echo("*");
}

echo "<br>";


for ($odd = 1; $odd <= 5 -$size; $odd++){
echo "";
}
    
for ($odd = 1; $odd <= 2 * $size - 1; $odd++){
echo("!");
}

echo "<br>";
}

?>