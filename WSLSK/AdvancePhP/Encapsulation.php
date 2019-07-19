<?php
class User 
{
    private $name;
    private $gender;
   
    public function getName() 
    {
     return $this->name;
    }
   
    public function setName($name) 
    {
     $this->name = $name;
     return $this;
    }
   
    public function getGender() 
    {
     return $this->gender;
    }
   
    public function setGender($gender) 
    {
        if ('male' !== $gender and 'female' !== $gender) 
        {
            throw new Exception('Set male or female for gender');
        }
         $this->gender = $gender;
        return $this;
    }
}
?>