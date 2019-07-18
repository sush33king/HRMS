<?php
class game {
    public function work(){
    echo "this is game ";
    }
}

class one extends  game{
    public function work(){
    echo "this is work";
    }
}

$x = new one;
$x->work();

?>