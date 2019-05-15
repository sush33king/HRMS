<html>
   <body>
   
      <?php
         $i = 0;
         $num = 50;
         
         while( $i < 1000) {
            //$num--;
            $num = $num - 1;
            //$i++;
            $i = $i + 1;
         }
         
         echo ("Loop stopped at i = $i and num = $num" );
      ?>
      
   </body>
</html>