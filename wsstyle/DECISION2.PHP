<html>
   <body>
      
      <?php
         $d = date("D");
         
         switch ($d){
            case "Mon":
               echo "Monday";
               break;
            
            case "Tue":
               echo "Tuesday";
               break;
            
            case "Wed":
               echo "Wednesday";
               break;
            
            case "Thu":
               echo "Thursday";
               break;
            
            case "Fri":
               echo "Friday";
               break;
            
            case "Sat":
               echo "Saturday";
               break;
            
            case "Sun":
               echo "Sunday";
               break;
            
            default:
               echo "ERROR WRONG SPELLING";
         }
      ?>
      
   </body>
</html>