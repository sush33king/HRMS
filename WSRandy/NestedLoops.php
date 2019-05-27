<?PHP

for ($size = 1; $size <= 51; $size++){

    for ($j = 1; $j <= 5 -$size; $j++){
    echo " ";
    }
    
    for ($j = 1; $j <= 2*$size - 1; $j++){
    echo("*");
    }
    
    echo "<br>";
    }
    for ($size = 1; $size <= 51; $size++){

        for ($j = 1; $j <= 5 -$size; $j++){
        echo " ";
        }
        
        for ($j = 1; $j <= 3*$size - 1; $j++){
        echo("!");
        }
        
        echo "<br>";
        }





?>