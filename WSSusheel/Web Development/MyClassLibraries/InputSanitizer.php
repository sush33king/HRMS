<?php
    class InputSanitizer
    {
        function cleanInput($input) 
        {

            $search = array(
              '@<script[^>]*?>.*?</script>@si',  
              '@<[\/\!]*?[^<>]*?>@si',           
              '@<style[^>]*?>.*?</style>@siU',   
              '@<![\s\S]*?--[ \t\n\r]*>@'       
            );
          
              $output = preg_replace($search, '', $input);
              return $output;
          
          
          foreach ($_POST as $key => $value) 
          {
             $_POST[$key] = mysqli_real_escape_string($con,cleanInput($value));
          }
        }
        
    }
?>