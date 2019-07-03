<?php

Class MyDatabase
{
    //Temp Variables
    public $var1,$var2,$tblname;

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
        $conn = sqlsrv_connect($this->var1, $this->var2);

        if($conn) 
        {
            $this->conn = $conn;
            echo "Connection established.<br />";
        }
        
        else
        {
            echo "Connection could not be established.<br />";
            die( print_r( sqlsrv_errors(), true));
        }
    }

    //Query Method
    public function queryDB($str)
    {
        global $conn;
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
    public function updateDB

    //Add Method
    public function addDB($data,$tblname)
    {
        
        //initialize variables to be used to store field names and field data
        $fldNames = "";
        $fldData = "";

        //loop through array and extract field names and field data from array
        foreach($data as $key => $val)
        {
            
            if($fldNames == "")
            {
                $fldNames = $key; 
                $fldData = "'" . $val . "'";  
            }   
            else
            {                
                $fldNames = $fldNames .  ',' . $key;   
                $fldData = $fldData . ',' . "'" . $val . "'";     
            }                                 
        }

        //combine field names and field data values into sql query
        $sql = "INSERT INTO " . $tblname . "(" . $fldNames . ") " . "VALUES(" . $fldData . ")";

        //execute prepared sql query
        $stmt = sqlsrv_query( $this->conn, $sql);

        //if error then display error
        if( $stmt === false )  
        {  
            echo "Error in query preparation/execution: <br><br>\n";  
            die( print_r( sqlsrv_errors(), true));  //this line of code terminates or ends the program completely
        }  
        else //if successful the display msg below
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

//ConnectionString
$serverName = "ZOELLON\SQLEXPRESS";
$connectionInfo = array("Database"=>"db_hrms");

//QueryString
$queryString = "SELECT * FROM tbl_employees";

//Data
$data = array("fld_employeeid"=>"E002", 
                "fld_name"=> "Mason",
                "fld_address"=>"D01",
                "fld_age"=>"29",
                "fld_position"=>"Manager",
                "fld_salary"=>"2000",
                "fld_departmentid"=>"DPHR2453");

                $tablename = "tbl_employees";


//Connection
$connection = new MyDatabase($serverName, $connectionInfo);
$connection1 = $connection->makeConnection();

//Query
$rs = $connection->queryDB($queryString);
echo var_dump($rs);

//Add
$add = $connection->addDB($data,$tablename);


?>