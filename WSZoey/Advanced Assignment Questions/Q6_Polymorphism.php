<?php

//Parent Interface to be implemented
interface Formula
{
    public function calcFormula();
}

//Class implements Interface, Class is called during runtime
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

//Class implements Interface, Classes is called during runtime
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

//Instantiating Classes
$plus = new Add(5,8);
$minus = new Subtract(10,5);

//Classes are arrayed
$array = array($plus,$minus);

//Foreach loop to echo out answers
foreach ($array as $value)
{
    echo $value-> calcFormula() . "<br>";
}







?>