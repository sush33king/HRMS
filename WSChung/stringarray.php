<?php
$phone = array("Iphone" , "Sumsung" , "Xiaomi" , "Vivo") ;
$max = 0 ;
$longest_word = "" ;

    for ($i = 0 ; $i < count($phone); $i++ ) {
        if (strlen($phone[$i]) > $max ) { 
            $max = strlen($phone[$i]);
          $longest_word = $phone[$i]  ;
        } 
 }


 echo "The longest word is " . $longest_word ;
?>