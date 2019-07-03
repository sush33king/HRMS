<?php

Class MyDatabase
{
    //Temp Variables
    public $var1,$var2,$conn,$tblname;

    //Construct Method
    public function __construct($var1,$var2)
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
    }

    //Connection Method
    public function makeConnection()
    {
        //Constructing Resource Variable
        $this->conn = sqlsrv_connect($this->var1, $this->var2);
    }

    //Query Method
    public function queryDB($str)
    {
        //Constructing Resource Variable
        $stmt = sqlsrv_query($this->conn, $str);

        //While loop to echo out content
        $i = 0;
        while($obj = sqlsrv_fetch_object($stmt))  
       {  
           $rs[$i++] = $obj;  
       }
       return $rs;
    }

    //Update Method

    //Add Method
    public function addDB($tblname)
    {
        $sql = "SELECT * FROM $tblname";
        $stmt = sqlsrv_query($this->conn, $sql);
        
        $i = 0;
        while ($obj = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_NUMERIC))
        {
            $table[$i++] = $obj; 
        }
        return $table;

        $addquery = "INSERT INTO $table ($table[0][0],$table[1][0],




    }
    //Delete Method

    //Connection End Method
    public function closeConnection()
    {
        sqlsrv_close($this->var1, $this->var2);
    }
}

//Variables
$serverName = "ZOELLON\SQLEXPRESS";
$connectionInfo = array("Database"=>"db_hrms");
$queryString = "SELECT * FROM tbl_employees";

//Instantiation
$connection = new MyDatabase($serverName, $connectionInfo);
$connection1 = $connection->makeConnection();
$rs = $connection->queryDB($queryString);
$table = $connection->addDB("tbl_employees");
echo var_dump($table);






?>