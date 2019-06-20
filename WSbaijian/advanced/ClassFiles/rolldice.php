<?php

Class RollDice
{
    
    public function Draw1()
      { 
            echo "1" ; 
      }
      public function Draw2() 
      {
            echo "2" ;
      }

      public function Draw3() 
      {
      echo "3" ;
      }
      public function Draw4()
      { 
      echo "4 " ;
      }
      public function Draw5()
      { 
      echo "5 " ;
      }
            public function Draw6() 
      {
      echo "6 " ;
            
      }

      public function RollTheDice()
      {
          $x = rand(1,6);
          if($x==1)
          {
                $this->Draw1();
          }
          if($x==2)
          {
                $this->Draw2();
          }
          if($x==3)
          {
                $this->Draw3();
          }
          if($x==4)
          {
                $this->Draw4();
          }
          if($x==5)
          {
                $this->Draw5();
          }
          if($x==6)
          {
                $this->Draw6();
          }
      }

}

?>