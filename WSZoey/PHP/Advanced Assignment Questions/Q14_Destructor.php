<?php
//Class Beetle Created
class Beetle
{
    public $name;

    //Construct Method
    public function __construct($name)
    {
        echo "A new species has been construct! <br><br>";
        $this->name = $name;
    }
    
    //Method
    public function beetleName()
    {
        global $name;

        echo "The new species has been named " . $this->name . ".";
        echo "<br><br>";
    }

    //Destruct Method
    public function __destruct()
    {
        echo "The " . $this->name . " has been destruct.";
    }
}

//Class Instantiation
$beetle = new Beetle("Wiggly Litchi");
echo $beetle->beetleName();
?>