<?php
if(isset($_GET['x']))
{
    $word = $_GET['x'];
     $alphabet = array( 
         '1'=> 'a',
         '2'=> 'b',
         '3'=> 'c',
         '4'=> 'd',
         '5'=> 'e',
         '6'=> 'f',
         '7'=> 'g',
         '8'=> 'h',
         '9'=> 'i',
        );
// convert string to array
 $str = str_split($word);

 $encoded = array();
 for($i= 0; $i < count($str);$i++)
{
    //echo "condition" . is_int($str[$i]);
    //echo '<br>';
    if(is_numeric($str[$i]) && $str[$i] <= 9 && $str[$i]>=1)
    //if(true)
    {
        $encoded[] = $alphabet[$str[$i]];
    }
    else
    {
        echo 'Problem with parameter';
    }
             
}}

echo implode($encoded);
?>