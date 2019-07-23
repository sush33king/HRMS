<?php
class work
{
    
    
    public function __construct()
    {
        echo "I'm busy! <br>";    
        
    }
    
    public function __destruct()
    {
        echo "I'm free now :( <br>";
    }
}
$not = new work;

?>