<html>
   <body>
   
      <?php
      date_default_timezone_set('Asia/Kuala_Lumpur');
      $fulldate = date('m/d/Y H:i:s a', time());
      echo $fulldate. "<br> <br>";
         $d = date("D");
         
         if ($d == "Fri")
            echo "Have a nice weekend!";
         
         elseif ($d == "Sun")
            echo "Have a nice Sunday!"; 
         
         else
            echo "Have a nice day!"; 
      ?>
      
   </body>
</html>