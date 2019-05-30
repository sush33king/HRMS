<?php

if(isset($_GET['width']) & isset($_GET['height'])){

    $width = $_GET['width'];
    $height = $_GET['height'];

  for($row = 0;$row < $height;$row++){

      for($column = 0;$column < $width;$column++){
      echo ("*");
      }
      echo "<br>";
    }

}

else{
echo 'Input variable not provided';
}

?>