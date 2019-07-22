<?php

class dog
{

    public function __construct()
    {
        print "bark\n";
    }
}

class cat extends dog 
{
        function __construct() {
            //the child class is calling for the parent class
            parent::__construct();
            print "meow\n";
        }
     }

$apply = new cat;   

?>