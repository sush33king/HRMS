
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

   include_once('../classes/diceroll.php');
   $d = new diceroll;
   $d->rolldice();






function add()
    {   
        echo  $this->x + $this->y ;  
        echo  $this->x + $this->y + $this->z ;
        echo  $this->x + $this->y + $this->z + $this->b ;
        echo  $this->x + $this->y + $this->z + $this->b + $this->c ;        
    }


    $x->add(8,5,2,4);
    $x->add(5,6,1);




?>