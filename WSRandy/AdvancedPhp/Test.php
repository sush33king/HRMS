<?php

$hehe = 15;
   
   function addit() {
      GLOBAL $hehe;
      $hehe++;
      
      print "that is $hehe";
   }
   
   addit();






?>