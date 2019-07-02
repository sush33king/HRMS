<?php 

class game
{
private $type, $year;
public static $count=0;

public function __construct($type, $year)
{
$this->type= $type;
$this->year= $year; 
game::$count++;
}

}

$game1= new game("gta_city", 2014);
$game2= new game("gta_4", 2016);
$game3= new game("gta_5", 2017);
$game4= new game("gta_online", 2017);
$game5= new game("gta_liberty_city", 2018);

echo "The number of objects in the class is " .game::$count . ".";

?>
