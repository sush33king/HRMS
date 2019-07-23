<?php

class student
{
    function __construct() 
    {
        print "I am TAN" .'<br>';
    }
}

class diploma extends student
{
    function __construct()
    {
        parent::__construct() ;
        print "I am LSK" ;
    }
}

$class = new diploma();



?>