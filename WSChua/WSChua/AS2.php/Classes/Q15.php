<?php

class MyDatabase
{   
    private $conn;

    public function  makeconnection(){
        //configure server instance name
        $serverName = "192.168.0.14\sqlexpress"; 

        //configure database connection information
        $connectionInfo = array( "Database"=>"task 3.1", "UID"=>"sa", "PWD"=>"password");

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
            die( print_r( sqlsrv_errors(), true));  
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
            die( print_r( sqlsrv_errors(), true));  
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

//1. Test make connection with db
//$db = new MyDatabase;
//$db -> makeconnection();

//2. Test query database
//$data = $db->query_db("select * from tbl_employee");
//echo var_dump($data);

//Test adding data
/*$data = array("fld_EMP_ID"=>"S26066", 
              "fld_name"=>"TAN" ,
              "fld_depID"=>"L004" ,
              "fld_hourrate" => "30.00"
            );

$tblName = "dbo.tbl_employee";

$db->adddb($data, $tblName); */

//4. Update

//make connection
/*$db = new MyDatabase;
$db->makeconnection();

//prepare data
$tblName = "tbl_employee";
$data = "fld_name = 'LEEMAN', fld_hourrate = '999'";
$criteria = "fld_emp_id = 'S20005'";

//run updata function using prepared data
$db->update($tblName, $data, $criteria);*/


//5. Delete
//make connection
$db = new MyDatabase;
$db->makeconnection();

//prepare data
$tblName = "tbl_employee";
$criteria = "fld_emp_id = 'S26066'";

//run updata function using prepared data
$db->deletedb($tblName, $criteria);


?>
