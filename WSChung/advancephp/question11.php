<?php
class movie {
   function __construct() {
       print "Movies constructor\n";
   }
}

class new_movie extends movie {
   function __construct() {
       parent::__construct();
       print "New_movie constructor\n";
   }
}

class new_moviess extends movie {
    // inherits games's constructor
}

// In games constructor
$use = new movie();

// In games constructor
// In new_games constructor
$use = new new_movie ();

// In games constructor
$use = new new_moviess();
?>