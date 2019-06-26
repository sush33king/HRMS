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

$game1= new game("igame 6", 2014);
$game2= new game("igame 7", 2016);
$game3= new game("igame 8", 2017);
$game4= new game("igame x", 2017);
$game5= new game("igame xs", 2018);

echo "The number of objects in the class is " .game::$count . ".";

?>
