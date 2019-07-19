<?php
abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function Class1();
    public function Students() 
    {
        print $this->Class1() . "\n";
    }
}

class Classes extends AbstractClass
{
    protected function Class1() 
    {
        return "Classes";
    }  
}

?>