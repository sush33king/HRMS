<?php

if(isset($_GET['x']) & isset($_GET['y'])){

    $z = $_GET['x'];
    $v = $_GET['y'];

    $c = $z + $v;
    echo $c;
}


?>