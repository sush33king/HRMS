<?php

if(isset($_GET['w']) & isset($_GET['h'])){

    $width = $_GET['w'];
    $height = $_GET['h'];

  for($row = 0;$row < $height;$row++){
      
    if($row==1 Or $row == $height){

      for($column = 0;$column < $width;$column++){
      echo ("*");
      }
      
    }

if($row > 1 And $row < $height)
        {
            for($column = 1; $column <= $width; $column++)
            {
                if($column <= $row)
                {
                    echo "*";
                }
                elseif($column <= $width -1) 
                {
                    
                    echo "<span style='color:#fff;'>*</span>";
                }
                elseif($column==$width) 
                {
                    echo "*";        
                }
            }
        }
        echo "<br>";
    }
}
else{
echo 'Input variable not provided';
}

?>