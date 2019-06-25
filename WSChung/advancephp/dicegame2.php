<?php

Class RollDice
{
    
    function RockAndRoll()
    {       
        //echo '/images/dice/dice' . rand(1,6) . '.PNG';
        header('Content-Type: image/png');
<<<<<<< HEAD
        echo file_get_contents('images/dice/dice' . rand(1,6) . '.png');            
=======
        echo file_get_contents('images/dice/dice' . rand(1,6) . '.PNG');            
>>>>>>> 6f5dc4d0b6654d680c76fd8c7c7e099619a92674
    }

}

?>