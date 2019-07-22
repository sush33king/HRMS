<?php
//Class BMW Created
class BMW
{
    public $GTR;

    //Construct Method
    public function __construct($GTR)
    {
        echo "A car has been construct! <br><br>";
        $this->name = $GTR;
    }
    
    //Method
    public function BMW()
    {
        global $GTR;

        echo "The car has been named " . $this->name . ".";
        echo "<br><br>";
    }

    //Destruct Method
    public function __destruct()
    {
        echo "The " . $this->name . " has been destruct.";
    }
}

//Class Instantiation
$BMW = new BMW("M5");
echo $BMW->BMW();
?>