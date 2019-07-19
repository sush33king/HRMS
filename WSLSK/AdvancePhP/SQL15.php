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
        die( print_r( sqlsrv_errors(), true));  //program close
        }  
        // display the results
            $i = 0;
             while( $obj = sqlsrv_fetch_object( $stmt))  
            {  
            $rs[$i++] = $obj;
               
            }
        return $rs;
    }

    public function addDB($data, $tblName)
    {
        //this is to store name and data in sql
        $fldNames = "";
        $fldData = "";

        //looping through an array and extracting  names and  data from array
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

        //combine  names and data values into sql query
        $sql = "INSERT INTO " . $tblName . "(" . $fldNames . ") " . "VALUES(" . $fldData . ")";

        //execute 
        $stmt = sqlsrv_query( $this->conn, $sql);

        //if error then display error
        if( $stmt === false )  
        {  
            echo "Error in query preparation/execution.\n";  
            die( print_r( sqlsrv_errors(), true));  //program close
        }  
        else //if successful the display msg below
        {
            echo "Record successfully added!";
        }
    }

    public function updateDB($tblName, $flddata, $where_condition) 
    {
        
        $sql = "UPDATE ".$tblName." SET ".$flddata." WHERE ".$where_condition."";  //It update the data to the condition

        $stmt = sqlsrv_query( $this->conn, $sql);
    
        if ($stmt === false) 
        {
        echo "Error updating record:";
        }       
        else 
        {
        echo "Record update successfully" ;
        }
    }

    public function deleteDB($tblName, $where_condition)
    {
        $sql = "DELETE FROM ".$tblName." WHERE ".$where_condition.""; // this will delete date from table in sql

        $stmt = sqlsrv_query( $this->conn, $sql);
    
        if ($stmt === false) 
        {
            echo "Error deleting record:";
        }       
        else 
        {
            echo "Record deleted successfully" ;
        }
    }

    public function closedb()
    {
        sqlsrv_close($this->conn); //close the sql connection

        if($this->conn === false )
        {
            echo "Could not close.\n"; 
            die( print_r( sqlsrv_errors(), true));
        }
        else 
        {
            echo "Connection close successfully!";
        }
    }
}


$conn = new Diagram;
$conn->makeconnection();
//$rs = $conn->queryDB("Select * From tbl_Project");
$data = array("fld_EMPID"=>"S21011", "fld_DeptID"=>"L023" ,"fld_Name"=>"L.Tan" ,"fld_HourlyRate"=> "50.0000" ) ;
//$tblName = "tbl_Employee";
$conn->addDB($data, $tblName);
//$where_condition = "fld_EMPID = 'S21011'" ;
$tblName = "tbl_Employee";
//$conn->deleteDB($tblName, $where_condition);
//$where_condition = "fld_EMPID = 'S10031'" ;
//$flddata = "fld_HourlyRate = '60.0000'" ;
//$tblName = "tbl_Employee";
//$conn->updateDB($tblName, $flddata, $where_condition) ;
echo var_dump($rs);
//$conn->closedb();

?>