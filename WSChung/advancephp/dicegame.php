<?php

class DiceRoll
{

public function Draw1() {   
      header('Content-Type: image/png');
      echo file_get_contents('images/dice/dice1' . '.png');      
}

public function Draw2() {
      header('Content-Type: image/png');
      echo file_get_contents('images/dice/dice2' . '.png');      
}

public function Draw3() {
      header('Content-Type: image/png');
      echo file_get_contents('images/dice/dice3' . '.png');      
}

public function Draw4() {
      header('Content-Type: image/png');
      echo file_get_contents('images/dice/dice4' . '.png');      
}

public function Draw5() {
      header('Content-Type: image/png');
      echo file_get_contents('images/dice/dice5' . '.png');      
}

public function Draw6() {
      header('Content-Type: image/png');
      echo file_get_contents('images/dice/dice6' . '.png');      
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