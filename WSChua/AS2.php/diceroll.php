
<?php

class DiceRoll
{
    function draw1()
    {
    echo ".........
          |       |
          |   *   |
          |       |
          ......... ";
    }

    function draw2()
    {
    echo ".........
          |       |
          |  * *  |
          |       |
          ........."
    }

    function draw3()
    {
    echo ".........
          |   *   |
          |       |
          |  * *  |
          ........."
    }

    function draw4()
    {
    echo ".........
          |  * *  |
          |       |
          |  * *  |
          ........."
    }

    function draw5()
    {
    echo ".........
          |  * *  |
          |   *   |
          |  * *  |
          ........."
    }


    function draw6()
    {
    echo ".........
          |  * *  |
          |  * *  |
          |  * *  |
          ........."
    }
   
    function rolldice()
    {
        $x=rand(1,6);
      
        if ($x==1){
            draw1();
        }

        if ($x==2){
            draw2();
        }
        if ($x==3){
            draw3(); 
        }
        
        if ($x==4){
            draw4();
        }
        
        if ($x==5){
            draw5();
        }
        
        if ($x==6){
            draw6();
        }
        


    }


}
?>