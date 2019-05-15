<html>
   <body>
   
      <?php
         $d = date('D');
         //$d = "Superman";
         if ($d == "fri"){
            echo "Have a nice weekend!";
         }
         elseif ($d == "Sun"){
            echo "Have a nice Sunday!"; 
         }
         elseif($d == "Mon"){
            echo "Have a nice day!";
         } 
         elseif($d == "Tue"){
            echo "Have a nice day!";
         } 
         elseif($d == "Wed"){
            echo "Have a nice day!";
         } 
         elseif($d == "Thu"){
            echo "Have a nice day!";
         } 
         else{

            if($d == "Superman"){

               echo "You are superman";

               if(date('D')=="Wed"){
                  echo '<br>on a Wednesday!';
               }
            }
            else{
             echo 'ooiiii salah la...';
            }
         }
      ?>
      
   </body>
</html>