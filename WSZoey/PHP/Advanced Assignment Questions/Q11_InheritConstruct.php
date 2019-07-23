<?php

//Calculator Class
class ParentClass
{
    //Construct Method
    public function __construct() 
    {
        static $instancecount = 0;
        $instancecount++;

        echo $instancecount . " instance created ";
        echo "<br><br>";
    }
}

//Child Class
class ChildClass extends ParentClass
{
    public function __construct()
    {
        parent::__construct();
        echo "I am the child class. <br>";

    }

    //Dummy Method
    public function blank()
    {
        echo "";
    }
}

//parent::__construct();
//$parent = new ParentClass;

//Instantiation
$child = new ChildClass;

echo "<br>";

?>