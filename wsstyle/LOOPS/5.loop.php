<html>
   <body>
   
      <?php
         $array = array( 3, 25, 7, 91, 53);
         
         foreach( $array as $product ) {
            if( $product == 3 )continue;
            echo "productnumber is  $product <br />";
         }
      ?>
   
   </body>
</html>