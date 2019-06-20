<?php

class DiceRoll
{

public function Draw1() {   
$content = file_get_contents('../Downloads/dice1' . $randomnumber . '.png');
header('Content-Type: image/png');
echo $content; }

public function Draw2() {
"<br>" ;
echo " _______
      |       |
      |  **   |
      |_______| " ;
"</br>" ;     
}

public function Draw3() {
"<br>" ;
echo " _______
      |       |
      |  ***  |
      |_______| " ;
"</br>" ;
}

public function Draw4() {
"<br>" ;
echo " _______
      |  *  * |
      |  *  * |
      |_______| " ;
"</br>" ;
}

public function Draw5() {
"<br>" ;
echo " _________
      |   *  *  |
      |    *    |
      |   *  *  |
      |_________|  " ;
"</br>" ;
}

public function Draw6() {
"<br>" ;
echo " _________
      |   *  *  |
      |   *  *  |
      |   *  *  |
      |_________|  " ;
"</br>"; 
}          


function rollthedice()
{
      $x=rand(1,6);
      if ($x==1){     
      $this->Draw1();
      }

      if ($x==2){     
      $this->Draw2();
      }

      if ($x==3){     
      $this->Draw3();
      }

      if ($x==4){     
      $this->Draw4();
      }

      if ($x==5){     
      $this->Draw5();
      }
      
      if ($x==6){     
      $this->Draw6();
      }
}
}
?>