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

    public function query_db($str) 
    {
        //execute query
        $stmt = sqlsrv_query($this->conn, $str);  

        //check for error when executing
        if( $stmt === false )  
        {  
            echo "Error.\n";  
            //end program
            die( print_r( sqlsrv_errors(), true));  
        }     

        //if no error then store data into array $data
        $i = 0;
        while( $obj = sqlsrv_fetch_object( $stmt))  
        {  
            $data[$i++] = $obj;
              
        }

        //return data to caller
        return $data ;
    }

    public function adddb($data, $tblName) {

         //initialize variables to be used to store field names and field data
        $fldNames = "";
        $fldData =  "";
    
        //prepare field names section of sql query
        $keyOnlyArray = array_keys($data);  
        $fldNames = implode(",",$keyOnlyArray);
    
        //prepare data section of sql query
        $dataOnlyArray = array_values($data);  
        $fldData = "'" . implode("','",$dataOnlyArray) . "'";  

        //combine field names and field data values into sql query
        $sql = "INSERT INTO " . $tblName . "(" . $fldNames . ") " . "VALUES(" . $fldData . ")";
    
        //execute query
        $stmt = sqlsrv_query( $this->conn, $sql);
    
        //if error then display error
        if( $stmt === false )  
        {  
                echo "Error.\n";  
                //end
                die( print_r( sqlsrv_errors(), true));  
        }  
            else //if successful the display msg below
        {
                echo "Record successfully added!";
        }
    }    

    public function deletedb($tblName, $where_condition) {

        //prepare the sql query using parameters supplied
        $sql = "DELETE FROM " . $tblName . " WHERE " . $where_condition.""; 

        //execute sql query
        $stmt = sqlsrv_query( $this->conn, $sql);
    
        if ($stmt === false) 
        {
            echo "Error";
        }       
        else 
        {
            echo "Successfully Deleted" ;
        }

    }

    public function update($tblName, $data, $where_condition) {
        
        

        //creating the query
        $sql = "UPDATE " . $tblName . " SET " . $data . " WHERE " . $where_condition . "";  

        //execute query
        $stmt = sqlsrv_query( $this->conn, $sql);
    
        if ($stmt === false) 
        {
            echo "Error";
        }       
        else 
        {
            echo "Successfuly Updated" ;
        }
    }

    public function closeconnection()
    {
        //close connection
        sqlsrv_close($this->conn);


        if($this->conn === false)  
        {
            echo "Failed to disconnect."; 
            die( print_r( sqlsrv_errors(), true));
        }
        else
        {
            echo "Disconnected."; 
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
