<?php
class games {
   function __construct() {
       print "In games constructor\n";
   }
}

class new_games extends games {
   function __construct() {
       parent::__construct();
       print "In new_games constructor\n";
   }
}

class hot_games_games extends games {
    // inherits games's constructor
}

// In games constructor
$use = new games();

// In games constructor
// In new_games constructor
$use = new new_games();

// In games constructor
//$use = new hot_games_games();
?>