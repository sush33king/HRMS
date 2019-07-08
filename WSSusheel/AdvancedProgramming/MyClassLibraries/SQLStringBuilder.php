<?php

//Class Declaration and Implementation
class SQLInsertIntoManager
{
    private $data;
    private $tblName;

    function __construct($data, $tblName)
    {
        $this->data = $data;
        $this->tblName = $tblName;
    }

    public function getKeys($data)
    {       
        $keyOnlyArray = array_keys($data);  
        return implode(",",$keyOnlyArray);   
    }

    public function getValues($data)
    {
        $keyOnlyArray = array_values($data);  
        return "'" . implode("','",$keyOnlyArray) . "'";  
    }

    public function generateInsertSQLString()
    {
        return "INSERT INTO " . $this->tblName . "(" . $this->getKeys($this->data) . ") 
                VALUES (" . $this->getValues($this->data) . ")"; 
    }
}

//TESTING THE CLASS
$data = array("EmpID"=>"XC90","EmpName"=>"chung","EmpAge"=>"10");
$insert = new SQLInsertIntoManager($data,"tblEmployees");
echo $insert->generateInsertSQLString();

?>