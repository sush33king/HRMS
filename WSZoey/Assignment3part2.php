<?php
$x = 12;
$y = 8;
$z = 10;

//Min Value
if ($x < $y){
    if ($x < $z){
    echo "Variable X contains the smallest value";}
}
elseif ($y < $x){
    if ($y < $z){
    echo "Variable Y contains the smallest value";}
    
    else {
        echo "Variable Z contains the smallest value";}
}
else;


echo "<br> <br>";

//Max Value
if ($x > $y){
    if ($x > $z){
    echo "Variable X contains the largest value";}
    else;
}
elseif ($y > $x){ 
    if ($y > $z){
    echo "Variable Y contains the largest value";}
    else {
        echo "Variable Z contains the largest value";}

}
else;

