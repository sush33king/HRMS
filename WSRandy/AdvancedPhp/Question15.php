<?php
class diagram
{   
    private $conn;

    public function  connection(){
        //naming the value for "serverName"
        $serverName = "PHIS-NBK-PM1"; 

        //extra information for to connect to database
        $connectionInfo = array( "Database"=>"db_hrms", "UID"=>"sa", "PWD"=>"password123");

        //using php function to connect to the database with settings used above
        $this->conn = sqlsrv_connect( $serverName, $connectionInfo);

        //verify if the connection is made
        if( $this->conn ) {
            echo "Connection established.<br />";
        }
        
        else{
            echo "Connection could not be established.<br />";
            die( print_r( sqlsrv_errors(), true));
        }
    }

    public function querydb($str) {
        $stmt = sqlsrv_query($this->conn, $str);  
        if( $stmt === false )  
        {  
        echo "Error in query preparation/execution.\n";  
        die( print_r( sqlsrv_errors(), true));  //the program is terminated by this code
        }     
        $i = 0;
        while( $obj = sqlsrv_fetch_object( $stmt))  
        {  
        $rs[$i++] = $obj;
        /*echo $obj->LastName.", ".$obj->FirstName."<br>"; */      
        }
        return $rs ;
    }

    public function adddb($data, $tblName) {

        //initialize variables to store field names and field data
        $fldNames = "";
        $fldData =  "";
    
        //extract field names and field data by looping through the array
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
    
        //the sql query is made up of the combination of both field names and data values
        $sql = "INSERT INTO " . $tblName . "(" . $fldNames . ") " . "VALUES(" . $fldData . ")";
    
        //executing sql query
        $stmt = sqlsrv_query( $this->conn, $sql);
    
        //display error if detected one
        if( $stmt === false )  
        {  
                echo "Error in query preparation/execution.\n";  
                die( print_r( sqlsrv_errors(), true));  //the program is terminated by this code
        }
            else //displays the following message if it worked
        {
                echo "Record successfully added!";
        }
    }    

    public function deletedb($tblName, $where_condition) {

        $sql = "DELETE FROM ".$tblName." WHERE ".$where_condition.""; 

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

    public function update($tblName, $flddata, $where_condition) {
        
        $sql = "UPDATE ".$tblName." SET ".$flddata." WHERE ".$where_condition."";  

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
    public function closeconnection()
    {
        sqlsrv_close($this->conn) ;
        if($this->conn === false)  
        {
            echo "Could Not disconnect."; 
            die( print_r( sqlsrv_errors(), true));
        }
        else
        {
            echo "Successfully disconnected."; 
        }
        
    }
    

}

$conn = new diagram ;
$conn -> connection();
//$rs = $conn -> querydb('select * from tbl_project');
//$data = array("fld_EMP_ID"=>"S26055", "fld_name"=>"TAN" ,"fld_depID"=>"L004" ,"fld_hourrate"=> "30.0000" ) ;
//$tblName = "tbl_employee";
//$conn->adddb($data, $tblName);
//echo var_dump($rs);
//$where_condition = "fld_EMP_ID = 'S26055'" ;
//$tblName = "tbl_employee";
//$conn->deletedb($tblName, $where_condition);
//$where_condition = "fld_EMP_ID = 'S20005'" ;
//$flddata = "fld_hourrate = '30.0000'" ;
//$tblName = "tbl_employee";
//$conn->update($tblName, $flddata, $where_condition) ;
//$conn->closeconnection();




?>