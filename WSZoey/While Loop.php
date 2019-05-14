<html>
   <body>
   
      <?php
      //While Loop
         $x = 0;
         $z = 80;
         
         while( $x < 20) {
            $z=$z+1;
            $x++;
         }
         
         echo ("Loop stopped at x = $x and z = $z" );
         echo "<br>";
         echo "<br>";
      ?>
      
   </body>
</html>

<html>
   <body>
      
      <?php
      //For Loop
         $v = 0;
         $y = 0;
         
         for( $q = 0; $q<5; $q++ ) {
            $v += 20;
            $y += 1;
         }
         
         echo ("At the end of the loop v = $v and y = $y" );
         echo "<br>";
         echo "<br>";
      ?>
   
   </body>
</html>

<html>
   <body>
   
      <?php
      //Do..While Loop
         $int = 0;
         $num = 0;
         
         do {
            $int++;
            $num = $num+10;
         }
         
         while( $int < 10 );
         echo ("Loop stopped at int = $int and num = $num" );
         echo "<br>";
         echo "<br>";
      ?>
      
   </body>
</html>

<html>
   <body>
   
      <?php
      //Foreach Loop
         $colors = array("Red","Green","Blue","White","Black");
         
         foreach( $colors as $value ) {
            echo "Value is $value <br />";
         }
      ?>
      
   </body>
</html>