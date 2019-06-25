<?php
class DICEROLL
{

      public function draw1()
      {
        echo "1";         
      }
      public function draw2()
      {
         echo "2";
      }
      public function draw3()
      {
          echo "3";
      }
      public function draw4()
      {
          echo "4";
      }
      public function draw5()
      {
          echo "5";
      }
      public function draw6()
      {
          echo "6";
      }
      public function rollthedice()
      {
          $x = rand(1,6);

          if($x == "1")
          {
              $this->draw1();
          }

          if($x == "2")
          {
             $this->draw2();
          }
          
          if($x == "3")
          {
             $this->draw3();
          }

          if($x == "4")
          {
             $this->draw4();
          }

          if($x == "5")
          {
             $this->draw5();
          }

          if($x == "6")
          {
             $this->draw6();
          }
      }
}

$x = new DICEROLL();
$x->rollthedice();
?>