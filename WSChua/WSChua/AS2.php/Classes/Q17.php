<?php

class Car_Wheel {} 

$wheel = new Car_Wheel();

class Car {

   private $wheel;

   public function __construct ($wheel) {
      $this->wheel = $wheel;   
   }
}

$Car = new Car($wheel);
It lets subclass inherits characteristics of the parent class. Parent class decides what and how its properties/methods to be inherited by declared visibility.

?>