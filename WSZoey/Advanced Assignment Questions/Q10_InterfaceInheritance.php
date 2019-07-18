<?php

//Interfaces
interface Name
{
    public function myname();
}

interface Age
{
    public function myage();
}

interface Appearance
{
    public function mylooks();
}

interface Weight
{
    public function myweight();
}


//Class implements multiple interfaces
class Eugene implements Appearance, Name, Age, Weight
{
    public function myname()
    {
        echo "Name: Eugene <br>";
    }

    public function myage()
    {
        echo "Eugene is twenty.<br>";
    }

    public function mylooks()
    {
        echo "Eugene is ugly.<br>";
    }

    public function myweight()
    {
        echo "Eugene is 60kg.<br><br>";
    }

    public function myweight()
    {
        echo "I am 70 kg<br><br>";
    }
}

//Class instantiation
$eugene1 = new Eugene;
$eugene1->myname();
$eugene1->myage();
$eugene1->mylooks();
$eugene1->myweight();


?>