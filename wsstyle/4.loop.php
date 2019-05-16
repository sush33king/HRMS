<html>
   <body>
   
      <?php
         $product = 0;
         
         while( $product < 10) {
            $product++;
            if( $product == 3 )break;
         }
         echo ("Loop stopped when product = $product" );
      ?>
   
   </body>
</html>