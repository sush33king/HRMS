<html>
   <body>
   
      <?php
         $d = "Mon";
         
         if ($d == "Sat" || $d == "Sun")
         {
            echo "TIME TO SLEEP BYEEEEEEEEE"; 
         }         
         else
         {
            echo "SCHOOL!!!!!!!!" . '<BR>'; 
            echo "NOT AGAIN!!!!!" ;
         }
        
    
    
     ?>
   
   </body>
</html>

<html>
   <body>
   
      <?php
         $d = "Mon";
         
         if ($d == "Fri")
            echo "TIME TO SLEEP";
         
         elseif ($d == "Sun")
            echo "PS4 HERE I COME "; 
         
         else
            echo "DAMMMMMM!!!!!!!!!"; 
      ?>
      
   </body>
</html>*/

<html>
   <body>
      
      <?php
         $d = "Super man";
         
         switch ($d){
            case "Mon":
               echo "SCHOOL";
               break;
            
            case "Tue":
               echo "SCHOOL AGAIN";
               break;
            
            case "Wed":
               echo "SHCOOL AGAIN AND AGAIN";
               break;
            
            case "Thu":
               echo "LAST DAY TO LIVE";
               break;
            
            case "Fri":
               echo "SLEEP TIME";
               break;
            
            case "Sat":
               echo "PS4 DAY";
               break;
            
            case "Sun":
               echo "GETTING READY TO GO BACK TO PRISON";
               break;
            
            default:
               echo "ERROR ERROR ERROR";
         }
      ?>
      
   </body>
</html>



















