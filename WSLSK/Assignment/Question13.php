<?php


if(isset($_GET['x']))
{
    
    $word = $_GET['x'];
    
    $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j');

    echo $alphabet[$word];


}
else
    echo 'Input variable not provided';

?>