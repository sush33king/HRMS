<?php 

class phone
{
private $type, $year;
public static $count=0;

public function __construct($type, $year)
{
$this->type= $type;
$this->year= $year; 
phone::$count++;
}

}

$phone1= new phone("iphone 6", 2014);
$phone2= new phone("iphone 7", 2016);
$phone3= new phone("iphone 8", 2017);
$phone4= new phone("iphone x", 2017);
$phone5= new phone("iphone xs", 2018);

echo "The number of objects in the class is " .phone::$count . ".";

?>
