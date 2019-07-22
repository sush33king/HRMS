<?php

class student
{
    function _construct() 
    {
        print "I am TAN" ;
    }
}

class diploma extends student
{
    function _construct()
    {
        parent::__construct() 
        print "I am LSK" ;
    }
}

$student = new diploma;



?>