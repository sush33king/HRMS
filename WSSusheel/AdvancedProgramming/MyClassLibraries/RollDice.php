<?php

Class RollDice
{
    
    function RockAndRoll()
    {       
        //echo '../Images/dice' . rand(1,6) . '.png';
        header('Content-Type: image/gif');
        echo file_get_contents('../Images/dice' . rand(1,6) . '.gif');       
        
        //header('Content-Disposition: Attachment;filename=image.png'); 
        //header('Content-type: image/png'); 
    }

}

?>