<html>
   <body>
   
      <?php
     date_default_timezone_set('Asia/Tokyo');
        $fulldate = date('m/d/Y H:i:s a', time());
        $t = date("H");
        echo $fulldate;
         
         if ($t < 12)
            echo "<br> Good Morning!"; 
         elseif ($t > 18 )
            echo "<br> Good Evening!";
         else
            echo "<br> Good Afternoon!";
        
         
      ?>
   
   </body>
</html>