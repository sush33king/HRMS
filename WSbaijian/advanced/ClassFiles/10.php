<?php
 
 interface games{
     public function gta_5();
 }

 interface watch{
     public function video();
 }

 class x implements games , watch {

    function gta_5(){
         echo " i play the gta_5";

     }

    function video(){
         echo " i watch video";
     }
}

 $y = new x();
 $y->games();

?>