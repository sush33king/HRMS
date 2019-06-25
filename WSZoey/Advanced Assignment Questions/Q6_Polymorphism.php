<?php

interface Formula
{
    public function calcFormula();
}

Class Add implements Formula
{
    private $value1;
    private $value2;

    public function __construct($value1,$value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function calcFormula()
    {
        return $this->value1 + $this->value2;
    }
}

Class Subtract implements Formula
{
    private $value1;
    private $value2;

    
    public function __construct($value1,$value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function calcFormula()
    {
        return $this->value1 - $this->value2;
    }

}

Class Multiply implements Formula
{
    private $value1;
    private $value2;

    
    public function __construct($value1,$value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function calcFormula()
    {
        return $this->value1 * $this->value2;
    }

}

$plus = new Add(5,8);
$minus = new Subtract(10,5);
$times = new Multiply(5,4);

$array = array($plus,$minus,$times);

foreach ($array as $value)
{
    echo $value-> calcFormula() . "<br>";
}







?>