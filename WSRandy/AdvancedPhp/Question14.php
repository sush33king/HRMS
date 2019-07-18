<?Php

class Song
{
    public $song_name = "No any good songs for now";
    
    public function __construct($song_name)
    {
        echo "I'm good!";    
        $this--->song_name = $song_name;
    }
    
    public function __destruct()
    {
        echo "I'm bad now D:";
    }
}

$song = new Song("A song is supposed to be good");
echo "Name of the Song: " . $song->song_name;

?>