<?PHP
$x = "*";
for ($size = 1; $size <= 51; $size++){

    for ($even = 1; $even <= 5 -$size; $even++){
    echo " ";
    }
    
    for ($even = 1; $even <= 2*$size - 1; $even++){
    echo("*");
    }
    
    echo "<br>";
    }
    $z = "!";
    for ($size = 1; $size <= 51; $size++){

        for ($odd = 1; $odd <= 5 -$size; $odd++){
        echo " ";
        }
        
        for ($odd = 1; $odd <= 3*$size - 1; $odd++){
        echo("!");
        }
        
        echo "<br>";
        }

        for ($size = 1; $size <= 51; $size++)
        {
          if ($size % 2 == 0)
          {
            echo "$x";
            echo "<br>";
          }
          else
          {
            echo "$z";
            echo "<br>";
          }
        }


?>