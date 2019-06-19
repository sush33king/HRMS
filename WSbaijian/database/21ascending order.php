<?php

$num = array ("1","99","8","5","42","6","7","9","1","99","1") ;
for ($x=0; $x<count( $num); $x++) {
  for ($y=0; $y<count($num); $y++) {

    if ($num[$y] > $num[$x]){
      $tmp = $num[$x];
      $num[$x] = $num[$y];
      $num[$y] = $tmp;
    }
  }
}

for($x=0;$x<count($num);$x++){
}
echo var_dump($num);

?>