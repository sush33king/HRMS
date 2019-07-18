<?php

class MyDatabase
{   
    private $conn;

    public function  makeconnection(){
        //configure server instance name
        $serverName = "127.0.0.1\sqlexpress"; 

        //configure database connection information
        $connectionInfo = array( "Database"=>"db_hrms", "UID"=>"sa", "PWD"=>"1234");

        //connect to database using php built in function sqlsrv_connect
        $this->conn = sqlsrv_connect( $serverName, $connectionInfo);

        //verify connection
        if( $this->conn ) {
            echo "Connection Successful.<br />";
        }
        
        else{
            echo "Connection Failed.<br />";
            die( print_r( sqlsrv_errors(), true));
        }
    }

    public function query_db($str) {
        $stmt = sqlsrv_query($this->conn, $str);  
        if( $stmt === false )  
        {  
            echo "Error in query preparation/execution.\n";  
            //end program
            die( print_r( sqlsrv_errors(), true));  
        }     
        $i = 0;
        while( $obj = sqlsrv_fetch_object( $stmt))  
        {  
            $data[$i++] = $obj;
              
        }
        return $data ;
    }

    public function adddb($data, $tblName) {

         //initialize variables to be used to store field names and field data
        $fldNames = "";
        $fldData =  "";
    
        $keyOnlyArray = array_keys($data);  
        $fldNames = implode(",",$keyOnlyArray);
    
        $dataOnlyArray = array_values($data);  
        $fldData = "'" . implode("','",$dataOnlyArray) . "'";  

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
        
        //creating the query
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

//TESTING SECTION

//Test make connection with db
$db = new MyDatabase;
$db->makeconnection();

//test enter data into table tbl_employee
/*$data = array("emp_id"=>"S26055", 
              "name"=>"TAN" ,
              "department_id"=>"ST" ,
              "salary"=> "30.0000" ,
              "age"=> "20" ,
              "last_name" => "hi"
            );

$tblName = "dbo.tbl_employee";

$db->adddb($data, $tblName);*/ 

//test query_db

echo var_dump($db->query_db("select * from tbl_employee"));
?>