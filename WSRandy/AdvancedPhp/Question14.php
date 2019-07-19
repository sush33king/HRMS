<?Php

class Song
{

    public function __construct()
    {
        echo "He's a good boi!<br>";
    }
    
    public function __destruct()
    {
        echo "I'm the bad guy now D:<br>";
    }
    
}


$song = new Song;

?>