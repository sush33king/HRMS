<?php
//$game = array("cso", "gta_5", "lol");
//echo "I like " . $game[cso] . ", " . $game[gta_5] . " and " . $game[lol] . ".";

//$game = array("cso", "gta_5", "lol");
//echo count($game);

//$game = array("cso", "gta_5", "lol");

//$arrlength = count($game);

/*for($x = 0; $x < $arrlength; $x++) {
    echo '$x = ' . $x . "<br>";
    echo $game[$x];
    echo "<br>";
}*/

/*$age = array("tan"=>"20", "fong"=>"19", "Joe"=>"23");
echo "tan is " . $age['tan'] . " years old.";

$age = array("tan"=>"20", "fong"=>"19", "Joe"=>"23");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}*/

/*$game = array
  (
  array("cso",600,2),
  array("gta_5",700,2),
  array("lol",500,2),
  );

echo $game[0][0] . ": price: " . $game[0][1] . ", quantity: " . $game[0][2] . "<br>";
echo $game[1][0] . ": price: " . $game[1][1] . ", quantity: " . $game[1][2] . ".<br>";
echo $game[2][0] . ": price: " . $game[2][1] . ", quantity: " . $game[2][2] . ".<br>";

//echo var_dump ($game)[0] ;
$total = 0 ;
$y = count($game);

   for ($x = 0; $x < $y; $x++ ) {
     $total = $total + ($game[$x][1] * $game[$x][2]);
   }  

$shoppingcart[0] = $total;
$shoppingcart[1] = $game;

echo "<br>" ;
echo "total cost = " . "$total" ;

echo var_dump($shoppingcart);*/

/*$game = array
  (
  array("cso",600,2),
  array("gta_5",700,2),
  array("lol",500,2),
  );

$total = 0 ;
   for ($x = 0; $x < count($game); $x++ ) {
     $total = $total + ($game[$x][1] * $game[$x][2]);
   }  

$shoppingcart[0] = $total;
$shoppingcart[1] = $game;


$x = 0 ;
while ( $x < count($game) ) {
echo "<br>";
echo  "Name " ."<b>" . $game[$x][0] . "</b>";
echo "<br>";
echo  "price " ."<b>" . $game[$x][1] . "</b>";
echo "<br>";
echo  "quantity" ."<b>" . $game[$x][2] . "</b>" ;

$x++ ; 
}*/

/*$x = 15;
$y = 8;
$z = 25;

//Min Value
if ($x < $y And $x < $z) {
    echo "Variable X contains the smallest value";
}
elseif ($y < $x And $y < $z) {
    echo "Variable Y contains the smallest value";
}

else {
    echo "Variable Z contains the smallest value";
}

echo "<br> <br>";

//Max Value
if ($x > $y And $x > $z){
    echo "Variable X contains the largest value";
}
elseif ($y > $x And $y > $z){
    echo "Variable Y contains the largest value";
}
else {
    echo "Variable Z contains the largest value";
}*/

for ($size = 1; $size <= 60; $size++){

    for ($j = 1; $j <= 5 -$size; $j++){
    echo "";
    }
    
    for ($j = 1; $j <= 2*$size - 1; $j++){
    echo("*");
    }
    
    echo "<br>";
    }
    

?>