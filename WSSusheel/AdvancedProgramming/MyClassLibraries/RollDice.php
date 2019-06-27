<?php

Class RollDice
{
    
    function RockAndRoll()
    {       
        header('Content-Type: image/png');
        echo file_get_contents('../Images/dice/dice' . rand(1,6) . '.png');       
        
        //header('Content-Disposition: Attachment;filename=image.png'); 
        //header('Content-type: image/png'); 
    }

}

?>