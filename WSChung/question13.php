<?php

//1. Step 1, check if input exists
if(isset($_GET["x"]))
{

 //Step 2, Assign input to a variable
 $x = $_GET["x"];
 $temp = str_split($x) ;
 echo var_dump($temp) ;

 if ($x = "1") {
     echo "A" ;
 } 

 if ($x = "2") {
    echo "B" ;
} 

if ($x = "3") {
    echo "C" ;
} 

if ($x = "4") {
    echo "D" ;
} 

if ($x = "5") {
    echo "E" ;
} 

if ($x = "6") {
    echo "F" ;
} 

if ($x = "7") {
    echo "G" ;
} 

if ($x = "8") {
    echo "H" ;
} 

if ($x = "9") {
    echo "I" ;
} 




?>