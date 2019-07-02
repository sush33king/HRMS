<?php

Class MyDatabase
{
    public $var1,$var2;

    public function __construct($var1,$var2)
    {
        $this->var1 = $var1;
        $this->var2 = $var2;

    }

    public function makeConnection()
    {
        sqlsrv_connect($this->var1, $this->var2);
    }

    public function queryDB()
    {
        sqlsrv_query($this->var1,$this->var2);
    }

    public function closeConnection()
    {
        sqlsrv_close($this->var1, $this->var2);
    }
}

$connection = new MyDatabase("ZOELLON\SQLEXPRESS", array("Database"=>"db_hrms"));
$connection1 = $connection->makeConnection();

$query = new MyDatabase($connection1, "SELECT * FROM tbl_employees");
$query1 = $query->queryDB();
echo $query1;

//$query = new MyDatabase("SELECT * FROM tbl_employees");
//$query->queryDB();






?>