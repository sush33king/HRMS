<?php

$num = array ("1","99","8","5","42","6","7","9","1","99","1") ;
for ($i=0; $i<count( $num); $i++) {
  for ($j=0; $j<count($num); $j++) {
    // Compare two elements of array
    if ($num[$j] > $num[$i]){
      $tmp = $num[$i];
      $num[$i] = $num[$j];
      $num[$j] = $tmp;
    }
  }
}

for($i=0;$i<count($num);$i++){
  //echo $num[$i];
}
echo var_dump($num);
 


?>