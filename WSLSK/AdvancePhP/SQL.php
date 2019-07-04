<?php
Class Diagram
{
  private $conn;
  public function makeconnection()
    {
        $serverName = "LSKPC\SQLEXPRESS";  
        $connectionInfo = array( "Database"=>"3.1",
                         "CharacterSet" => "UTF-8");  
        $this->conn = sqlsrv_connect( $serverName, $connectionInfo);  
        if( $this->conn === false )  
        {  
            echo "Could not connect.\n";  
            die( print_r( sqlsrv_errors(), true));  
        }  
    }

    public function queryDB($str)
    {
           
        $stmt = sqlsrv_query( $this->conn, $str);  
        if( $stmt === false )  
        {  
        echo "Error in query preparation/execution.\n";  
        die( print_r( sqlsrv_errors(), true));  //this line of code terminates or ends the program completely
        }  
        /* Retrieve each row as a PHP object and display the results.*/ 
            $i = 0;
             while( $obj = sqlsrv_fetch_object( $stmt))  
            {  
            $rs[$i++] = $obj;
             /*echo $obj->LastName.", ".$obj->FirstName."<br>"; */      
            }
        return $rs;
    }

    public function addDB($data, $tblName)
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
        $sql = "INSERT INTO " . $tblName . "(" . $fldNames . ") " . "VALUES(" . $fldData . ")";

        //execute prepared sql query
        $stmt = sqlsrv_query( $this->conn, $sql);

        //if error then display error
        if( $stmt === false )  
        {  
            echo "Error in query preparation/execution.\n";  
            die( print_r( sqlsrv_errors(), true));  //this line of code terminates or ends the program completely
        }  
        else //if successful the display msg below
        {
            echo "Record successfully added!";
        }
    }

    public function deleteDB()
    {
        $sql = 'DELETE FROM ';

        return $this->conn->exec($sql);

        //if error then display error
        if( $stmt === false )  
        {  
            echo "Error in query preparation/execution.\n";  
            die( print_r( sqlsrv_errors(), true));  //this line of code terminates or ends the program completely
        }  
        else //if successful the display msg below
        {
            echo "Record successfully added!";
        }
    }
}


$conn = new Diagram;
$conn->makeconnection();
$rs = $conn->queryDB("Select * From tbl_Project");
//$data = array("fld_EMPID"=>"S21011", "fld_DeptID"=>"L023" ,"fld_Name"=>"S.Lee" ,"fld_HourlyRate"=> "50.0000" ) ;
//$tblName = "tbl_Employee";
//$conn->adddb($data, $tblName);
$conn->deleteDB();
echo var_dump($rs);
?>