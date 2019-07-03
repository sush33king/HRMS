<?php
/*
$a = 123; // decimal number
echo $a;
echo "<br>";
 
$b = -123; // a negative number
echo $b;
echo "<br>";
 
$c = 0x1A; // hexadecimal number
echo $c;
echo "<br>";
 
$d = 0123; // octal number
echo $d;
echo "<br>"; */

/*
$a = 'Hello world!';
echo $a;
echo "<br>";
 
$b = "Hello world!";
echo $b;
echo "<br>";
 
$c = 'Stay here, I\'ll be back.';
echo $c;*/


/* First method to create array. 
$product = array( "rice", "mee", "bao", "pizza", "drink");
         
foreach( $food as $value ) {
echo "Value is $value <br />";
}*/
         
/* Second method to create array. 
$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";
         
foreach( $numbers as $value ) {
echo "Value is $value <br />";
}*/

/*example
$food = array("mee", "rice", "bao", "pizza", "drink");
foreach( $food as $value ) {
echo "value is $value <br/>";
}*/

/* First method to associate create array. 
$salaries = array("mohammad" => 2000, "qadir" => 1000, "zara" => 500);
         
echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
echo "Salary of zara is ".  $salaries['zara']. "<br />";*/
         
/* Second method to create array. 
$salaries['mohammad'] = "high";
$salaries['qadir'] = "medium";
$salaries['zara'] = "low"; *
         
echo "Salary of mohammad is ". $salaries['mohammad'] . "<br />";
echo "Salary of qadir is ".  $salaries['qadir']. "<br />";
echo "Salary of zara is ".  $salaries['zara']. "<br />";
    
$position = array("chuah"=> 'HR', "zoey" => 'IT', "dickson"=>'SL');

echo "position of chuah is ". $position ['chuah']. "<br>";
echo "position of zoey is ". $position['zoey']. "<br>";
echo "position of dickson is ". $position['dickson']. "<br>";
*/

//$position[0] = "high";
//$position[1] = "medium";
//$position[2] ="low";

//echo "position of chuah is ". $position ['chuah']. "<br>";
//echo "position of zoey is ". $position['zoey']. "<br>";
//echo "position of dickson is ". $position['dickson']. "<br>";

//echo '<textarea rows="4" cols="50">
//At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies. 
//</textarea> <br><br>';

//for loop
//for($x=0; $x < count($position); $x++)
//{

  //  echo $position[$x] . '<br>';
//}



class enlitenIT
{ $classid;
    $class_year;

function abc ($x,$y)
{
    $ans = ($x + $y) 
    return $ans;
    
}
}
$y=1
$x= 2
abc ($x,$y);
echo $ans

$cls_enliten = new enlitenIT();
$no_of_student = $cls_enlitengot>getnumberofstudent();




class calculator 
{
  public static $count = 0;
  public $count2 = 0;

  public calculator ()
  {
    $count2++;
    $count++;
  }
}
$calc = new calculator();
$calc2= new calculator();
echo calculator::$count;
echo $calc ->$count


UPLOAD_ERR_EXTENSION (Value: 7)
UPLOAD_ERR_EXTENSION ()


//Polymorphism
interface shap 
{
  public function draw()
}

$val[0] = new Circle();
$val[1] = new Triangle();
$val[2] = new Ellipse();

for($i=0; $i<count($val);$i++)
{
  $val[$i]->draw();
}



// Defining constant
define("SITE_URL", "https://www.tutorialrepublic.com/");
 
// Using constant
echo 'Thank you for visiting - ' . SITE_URL;


// Abstract class example in PHP 
abstract class base 
{ 
    // This is abstract function 
    abstract function showdata(); 
      
    // This is not abstract function 
    function pr() 
    { 
        echo "Base class"; 
    } 
} 


?>



