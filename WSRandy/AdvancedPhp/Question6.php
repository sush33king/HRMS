<?php

interface Formula
{
    public function calcFormula();
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

Class Modulus implements Formula
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
        return $this->value1 % $this->value2;
    }
}

$multiply = new multiply(7,3);
$subtract = new subtract(23,5);
$modulus = new modulus(15,7);

$array = array($multiply,$subtract,$modulus);

foreach ($array as $value)
{
    echo $value-> calcFormula() . "<br>";
}

?>