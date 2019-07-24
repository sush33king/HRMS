<?php
class DiceRoll
{
    function draw1()
    {
        
    echo ".........<br>
          |.......|<br>
          |...*...|<br>
          |.......|<br>
          ......... ";
          
    }
    function draw2()
    {
    echo ".........<br>
          |.......|<br>
          |..* *..|<br>
          |.......|<br>
          .........";
    }
    function draw3()
    {
    echo ".........<br>
          |...*...|<br>
          |.......|<br>
          |..* *..|<br>
          .........";
    }
    function draw4()
    {
    echo ".........<br>
          |..* *..|<br>
          |.......|<br>
          |..* *..|<br>
          .........";
    }
    function draw5()
    {
    echo ".........<br>
          |..* *..|<br>
          |...*...|<br>
          |..* *..|<br>
          .........";
    }
    function draw6()
    {
    echo ".........<br>
          |..* *..|<br>
          |..* *..|<br>
          |..* *..|<br>
          .........";
    }
   
    function rolldice()
    {
        $x=rand(1,6);
      
        if ($x==1){
            $this->draw1();
        }
        if ($x==2){
            $this->draw2();
        }
        if ($x==3){
            $this->draw3(); 
        }
        
        if ($x==4){
            $this->draw4();
        }
        
        if ($x==5){
            $this->draw5();
        }
        
        if ($x==6){
            $this->draw6();
        }
        
    }
}
?> 