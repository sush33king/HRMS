<?php

interface Car
{
    public function drive();
}

interface Bike
{
    public function ride();
}


class Vehicles implements Car, Bike
{
    public function drive()
    {
        echo "i can drive a car <br>";
    }

    public function ride()
    {
        echo "i can ride a bike <br>";
    }
}

$vehicles1 = new Vehicles;
$vehicles1->drive();
$vehicles1->ride();

?>