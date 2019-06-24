<?php

class Calculator 
{
    public static $count = 0;
    public $count2 = 0;
    public Calculator()
    {
    $count2++;
    $count++;
    }

}

$calc = new Calculator();
$calc2 = new Calculator();
echo Calculator :: $count;
echo $calc -> $count2;






?>