<?php

 interface A { 
    public function fruitsA ();
 } 
   
 interface B { 
    public function fruitsB (); 
 } 
   
 class C implements A , B { 
   
     function fruitsA() { 
         echo "\n Orange"; 
     } 
   
     function fruitsB() { 
        echo "\n Banana."; 
     } 
 } 
   
 $fruits = new C(); 
 $fruits->fruitsA(); 
 $fruits->fruitsB(); 

 ?> 