<?php

interface Name
{
    public function myname();
}

interface Age
{
    public function myage();
}

interface Appearance extends Name,Age
{
    public function mylooks();
}

class Richard implements Appearance
{
    public function myname()
    {
        echo "Name: Richard <br>";
    }

    public function myage()
    {
        echo "Richard is twenty-four.<br>";
    }

    public function mylooks()
    {
        echo "Richard is handsome.<br><br>";
    }
}

class Eugene implements Appearance
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
        echo "Eugene is ugly.<br><br>";
    }
}
$richard1 = new Richard;
$richard1->myname();
$richard1->myage();
$richard1->mylooks();

$eugene1 = new Eugene;
$eugene1->myname();
$eugene1->myage();
$eugene1->mylooks();


?>