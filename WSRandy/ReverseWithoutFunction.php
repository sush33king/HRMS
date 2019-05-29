<?php 

$string = 'poet';
$reverse = '';
$i = 0;
while(!empty($string[$i])){ 
      $reverse = $string[$i].$reverse; 
      $i++;
}
echo $reverse;
echo "<br>";

$array = array("me", "daddy", "ree", "heh");
$size = sizeof($array);

for($i=$size-1; $i>=0; $i--){
    echo $array[$i];
    echo "<br>";
}


?>