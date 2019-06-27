<?php

Class PlusOne 
{
    public static $value = 0;

    public function add()
    {
        self::$value = self::$value + 1;
        echo self::$value;
        
    }

}

$calc = new PlusOne;
$calc-> add();

$calc2 = new PlusOne;
$calc2-> add();

$calc3 = new PlusOne;
$calc3-> add();












?>