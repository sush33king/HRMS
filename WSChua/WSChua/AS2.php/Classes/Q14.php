<?php
class store
{
    public $store_time = "we are open now";

    //this is the method constructor 
    public function __construct($store_time)
    {
        echo "we are open!";    
        $this->store_time = $store_time;
    }
   //this is the method destructor which can involved when object are deleted. 
    public function __destruct()
    {
        echo "we are close now :(";
    }
}
$store = new store("we are waijie's store");
echo "Name of the store: " . $store->store_time;

?>
