<?php
class Msi {
   function __construct() {
       print "I am Msi constructor\n";
   }
}

class laptop extends Msi {
   function __construct() 
   {
       parent::__construct();//child calling parent constructor
       print "I am a laptop constructor\n";
   }
}


$use = new laptop();

?>