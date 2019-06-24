<?php

Class RollDice
{
    
    function RockAndRoll()
    {       
        header('Content-Type: image/gif');
        echo file_get_contents('../Images/Dice' . rand(1,6) . '.GIF');            
    }

}

?>