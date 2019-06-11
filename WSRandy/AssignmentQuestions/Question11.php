<?php

if(isset($_GET['w']) & isset($_GET['h'])){

    $width = $_GET['w'];
    $height = $_GET['h'];

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