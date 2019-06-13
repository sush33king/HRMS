<?php
$FRUITS = array("BANANAN","MANGO","APPLE","DURIAN","MANGOSTEEN");
$max = 0;
$longestword = ""; 
 for($i = 0; $i < count($FRUITS) ; $i++)
    {
     if(strlen ($FRUITS[$i]) > $max)
        {
         $max = strlen ($FRUITS[$i]);
         $longestword = $FRUITS[$i];
        }
    }
echo 'LONGESTWORD IS ' . $longestword; 

?>