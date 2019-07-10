<?php
class the_work
{
    
    
    public function __construct()
    {
        echo "I'm alive! <br>";    
        
    }
    
    public function __destruct()
    {
        echo "I'm dead now :( <br>";
    }
}
$not = new the_work;

?>