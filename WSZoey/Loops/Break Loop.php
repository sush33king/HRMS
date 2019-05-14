<html>
   <body>
   
      <?php
      //Break Loop
         $int = 0;
         $num = 0;
         
         while( $int < 10 ) {
            $int++;
            $num = $num+10;
            if( $int == 3 )break;
         }
         echo ("Loop stopped at int = $int and num = $num" );
      ?>
   
   </body>
</html>