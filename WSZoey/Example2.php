<?php

Class Calculator
{
    function add($a,$b)
    {
        return $a + $b;
    }

    function subtract($a,$b)
    {
        return $a - $b;
    }
}

$calc = new Calculator;
$answer = $calc-> add(3,4);

echo $answer;









?>