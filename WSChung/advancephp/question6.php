<?php

interface Formula
{
    public function calcFormula();
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

Class Divide implements Formula
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
        return $this->value1 / $this->value2;
    }

}

$modulus = new modulus(5,8);
$minus = new Subtract(10,5);
$divide = new divide(5,4);

$array = array($modulus,$minus,$divide);

foreach ($array as $value)
{
    echo $value-> calcFormula() . "<br>";
}

?>