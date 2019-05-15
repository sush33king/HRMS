<html>
   <body>
      
      <?php
       date_default_timezone_set('America/Los_Angeles');
       $fulldate = date('m/d/Y H:i:s a', time());
         $d = date("H");
         
         echo $fulldate. "<br>";

         switch ($d){
            case 0:
               echo "It's midnight";
               break;
            
            case 1:
               echo "It's midnight";
               break;
            
            case 2:
               echo "It's midnight";
               break;
            
            case 3:
               echo "It's midnight";
               break;
            
            case 4:
               echo "It's midnight";
               break;
            
            case 5:
               echo "It is dawn";
               break;
            
            case 6:
               echo "It is dawn";
               break;
            
            case 7:
            echo "It is early in the morning";
            break;

            case 8:
            echo "It is early in the morning";
            break;

            case 9:
            echo "It is early in the morning";
            break;

            case 10:
            echo "It is late in the morning";
            break;

            case 11:
            echo "It is late in the morning";
            break;

            case 12:
            echo "It's high noon";
            break;

            case 13:
            echo "It is afternoon";
            break;
            
            case 14:
            echo "It is afternoon";
            break;

            case 15:
            echo "It is afternoon";
            break;

            case 16:
            echo "It is afternoon";
            break;

            case 17:
            echo "It is afternoon";
            break;

            case 18:
            echo "It is evening";
            break;

            case 19:
            echo "It is evening";
            break;

            case 20:
            echo "It is evening";
            break;

            case 21:
            echo "It is nighttime";
            break;

            case 22:
            echo "It is nighttime";
            break;

            case 23:
            echo "It is late at night";
            break;

            default:
               echo "What time is it?";
         }
      ?>
      
   </body>
</html>