<?php

//Creating Abstract Class
abstract class Bird {

    //Abstract Function to be assigned by class itself
    abstract public function birdType();
    
    //Abstract Function that is already assigned
    //and will be implemented into class
    public function hasWings() 
    {
        echo "I have wings!";
    }
}

//Class implementing Abstract Class
class Pigeon extends Bird{

    //Abstract method being defined
    public function birdType()
    {
        echo "I am a pigeon! <br>";
    }
}

//Call
$newbird = new Pigeon;
$newbird->birdType();
$newbird->hasWings();

?>