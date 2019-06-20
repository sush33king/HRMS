
<?php
   /*function keep_track() {
      STATIC $count = 0;
      $count++;
      print $count;
      print "<br />";
   }
   
   keep_track();
   keep_track();
   keep_track();*/

   include_once('diceroll.php');
   $d = new DiceRoll;
   $d->rolldice();
?>