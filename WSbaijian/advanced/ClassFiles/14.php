<?php
class MyClass
{
    public $work_name = "No any birds for now";
    
    public function __construct($work_name)
    {
        echo "I'm alive!";    
        $this->work_name = $work_name;
    }
    
    public function __destruct()
    {
        echo "I'm dead now :(";
    }
}
$not = new MyClass("Sparrow is work");
echo "Name of the work: " . $not->work_name;
?>