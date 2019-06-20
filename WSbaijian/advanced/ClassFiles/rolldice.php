<?php
class DiceRoll
{

      public function Draw1()
      { 
            echo " __________
                  |          |
                  |    *     |
                  |          |
                  |__________| " ; 
      }
      public function Draw2() 
      {
            echo " __________
                  |          |
                  |  *    *  |
                  |          |
                  |__________| " ;
      }

      public function Draw3() 
      {
      echo "   __________
            |          |
            |  *    *  |
            |    *     |
            |__________|" ;
      }
      public function Draw4()
      { 
      echo " ___________
            |           |
            |  *    *   |
            |  *    *   |
            |___________| " ;
      }
      public function Draw5()
      { 
      echo " ___________
            |   *   *   |
            |     *     |
            |   *   *   |
            |___________|  " ;
      }
            public function Draw6() 
      {
      echo " ___________
            |   *   *   |
            |   *   *   |
            |   *   *   |
            |___________|  " ;
            
      }

}
?>