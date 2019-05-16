<html>
   <body>
   
      <?php
      //Continue Loop
         $color = array( "Red", "Blue", "Green", "Yellow", "Brown");
         
         foreach( $color as $value ) {
            if( $value == "Green" )continue;
            echo "Value is $value <br />";
         }
      ?>
   
   </body>
</html>