<?php

Class RollDice
{
    
    function RockAndRoll()
    {       
        //echo '/images/dice/dice' . rand(1,6) . '.PNG';
        header('Content-Type: image/png');
        echo file_get_contents('images/dice/dice' . rand(1,6) . '.png');            
    }

}

?>