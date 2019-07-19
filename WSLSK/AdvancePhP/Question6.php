<?php

interface Formula
{
    public function Calc();
}

Class Add implements Formula
{
    private $number1;
    private $number2;

    public function __construct($number1,$number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function Calc()
    {
        return $this->number1 + $this->number2;//add +
    }
}

Class Multiply implements Formula
{
    private $number1;
    private $number2;

    
    public function __construct($number1,$number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function Calc()
    {
        return $this->number1 * $this->number2;//multiply *
    }

}

Class Minus implements Formula
{
    private $number1;
    private $number2;

    
    public function __construct($number1,$number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function Calc()
    {
        return $this->number1 - $this->number2;//minus -
    }

}

$add = new Add(166,100);//266
$multiply = new Multiply(25,5);//125
$minus = new Minus(16,6);//10

$array = array($add,$multiply,$minus);

foreach ($array as $value)
{
    echo $value-> Calc() . "<br>";
}

?>