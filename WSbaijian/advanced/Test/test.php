<?php
class game{
}

class two {
    private $game;
    public function __construct(){
        $this->game = new game;
    }
}

$game = new two();

?>