<?php
class Msi {
   function __construct() {
       print "In Msi constructor\n";
   }
}

class laptop extends Msi {
   function __construct() {
       parent::__construct();
       print "In laptop constructor\n";
   }
}

class Illegear extends Msi {
    // inherits games's constructor
}

// In games constructor
$use = new Msi();

// In games constructor
// In laptop constructor
$use = new laptop();

// In games constructor
//$use = illegear();
?>