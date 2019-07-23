<html>
   <body>
   
      <?php
     date_default_timezone_set('Asia/Kuala_Lumpur');
         $fulldate = date('m/d/Y H:i:s a', time());
         $t = date("H");

         echo $fulldate;
         
         if ($t < 12)
            echo "<br> Good Morning!"; 
         
         else
            echo "<br> Have a nice day!"; 
      ?>
   
   </body>
</html>