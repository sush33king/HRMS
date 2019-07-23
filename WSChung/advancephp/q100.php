<?php

class phone {}

class phones  
{
    public function __construct()
    {
        $this->phone = new phone();
    }
}

$iphone = new phones();

?>