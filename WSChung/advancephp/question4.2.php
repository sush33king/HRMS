<?php

class calculator
{
    public static $count;
    public $count2;
    public calculator ()
    {
        $count2++ ;
        $count++ ;
    }
}

$calc = new calculator();
$calc2 = new calculator();
echo calculator::$count;
echo $calc -> $count2 ;

?>