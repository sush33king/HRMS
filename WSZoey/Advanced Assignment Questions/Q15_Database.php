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
    public function updateDB($data,$where,$tblname)
    {
        $fldNames = "";
        $fldData = "";

        foreach($data as $key => $val)
        {
            
            if($fldNames == "")
            {
                $fldNames = $key; 
                $fldData = "'".$val."'";  
            }   
            else
            {                
                $fldNames = $fldNames. ',' . $key;   
                $fldData = $fldData. ',' . "'".$val."'";     
            }                                 
        }

        $fldNameArr = explode(",",$fldNames);
        $fldDataArr = explode(",",$fldData);

        echo var_dump($fldNameArr);
        echo var_dump($fldDataArr);
        
        for ($x = 0; $x < count($fldNameArr);$x++)
        {
            $sql = "UPDATE " . $tblname . " SET " . $fldNameArr[$x] . " = " . $fldDataArr[$x] . " WHERE " . 
                   $where;

            $stmt = sqlsrv_query( $this->conn, $sql);

            if( $stmt === false )  
            {  
                echo "Error in query preparation/execution: <br><br>\n";  
                die( print_r( sqlsrv_errors(), true));  //this line of code terminates or ends the program completely
            }  
            else //if successful the display msg below
            {
                echo "Record successfully updated!<br><br<br>";
            }
        }
    }

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
    public function deleteDB($tblname,$where)
    {
        $sql = "DELETE FROM " . $tblname . " WHERE " . $where;

        $stmt = sqlsrv_query( $this->conn, $sql);

        //if error then display error
        if( $stmt === false )  
        {  
            echo "Error in query preparation/execution: <br><br>\n";  
            die( print_r( sqlsrv_errors(), true));  //this line of code terminates or ends the program completely
        }  
        else //if successful the display msg below
        {
            echo "Record successfully removed!";
        }
    }

    //Connection End Method
    public function closeConnection()
    {
        $closeconn = sqlsrv_close($this->conn);

        if($closeconn) 
        {
            $this->closeconn = $closeconn;
            echo "Connection closed.<br />";
        }
        
        else
        {
            echo "Connection could not be closed<br />";
            die( print_r( sqlsrv_errors(), true));
        }
    }
}

//Variables

//ConnectionString
$serverName = "ZOELLON\SQLEXPRESS";
$connectionInfo = array("Database"=>"db_hrms");

//QueryString
$queryString = "SELECT * FROM tbl_employees";

//Data
$data = array("fld_name"=> "Mydick",
                "fld_address"=>"pp",
                "fld_salary"=>"1000",);

                $where = "fld_employeeid = 'E002'";
                $tablename = "tbl_employees";


//Connection
$connection = new MyDatabase($serverName, $connectionInfo);
$connection1 = $connection->makeConnection();

//Query
$rs = $connection->queryDB($queryString);
echo var_dump($rs);

//Add
//$add = $connection->addDB($data,$tablename);

//Update
//$update = $connection->updateDB($data,$where,$tablename);

//Delete
//$delete = $connection->deleteDB($tablename,$where);

//Close Connection
$connectionclose = $connection->closeConnection();

//Closed Query
$rs = $connection->queryDB($queryString);
echo var_dump($rs);
?>