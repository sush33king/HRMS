<?php
class database
{   
    private $conn;

    public function  connection(){
        $serverName = "LSKPC\SQLEXPRESS"; 

        $connectionInfo = array( "Database"=>"Membership", "UID"=>"", "PWD"=>"");

        $this->conn = sqlsrv_connect( $serverName, $connectionInfo);


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
        die( print_r( sqlsrv_errors(), true));  
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

        $fldNames = "";
        $fldData =  "";

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

        $sql = "INSERT INTO " . $tblName . "(" . $fldNames . ") " . "VALUES(" . $fldData . ")";

        $stmt = sqlsrv_query( $this->conn, $sql);

        if( $stmt === false )  
     {  
        echo "Error in query.\n";  
        die( print_r( sqlsrv_errors(), true)); 
     }  
    else //if successful the display msg below
     {
        echo "successfully added!";  
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


?>