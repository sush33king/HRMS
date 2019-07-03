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
    public function addDB($data,$tblname)
    {
        $sql = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$tblname'";
        $stmt = sqlsrv_query($this->conn, $sql);

        $i = 0;
       while ($obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_NUMERIC))  
       {  
           $columns[$i++] = $obj;  
       }
       return $columns;

        $addquery = "INSERT INTO $tblname ($columns) VALUES ($data)";
        $addstmt = sqlsrv_query($this->conn, $addquery);

          //if error then display error
          if( $addstmt == false )  
          {  
              echo "Error in query preparation/execution.\n";  
              die( print_r( sqlsrv_errors(), true));  //this line of code terminates or ends the program completely
          }  
          else  //if successful the display msg below
          {
              echo "Record successfully added!";
          }
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
echo var_dump($rs);

$dataarray = array("Z1813","Mason","Bukit Jelutong","20","Manager","5000","DPHR2453");

$add = $connection->addDB($dataarray,"tbl_employees");
echo var_dump ($add);

$rs2 = $connection->queryDB($queryString);
echo var_dump($rs2);



?>