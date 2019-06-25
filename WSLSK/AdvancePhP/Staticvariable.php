<?php 

class car
{
private $type, $year;
public static $count=0;

public function __construct($type, $year)
{
$this->type= $type;
$this->year= $year; 
car::$count++;
}

}

$car1= new car("BMW", 2014);
$car2= new car("Honda", 2016);
$car3= new car("Toyota", 2017);
$car4= new car("Mazda", 2017);
$car5= new car("Audi", 2018);

echo "The number of objects in the class is " .car::$count . ".";

?>