<?php
class diagram
{   
    private $conn;

    public function  connection(){
        //setting the value for "serverName\instanceName"
        $serverName = "127.0.0.1"; 

        //additional information for making connection to database
        $connectionInfo = array( "Database"=>"task 3.1", "UID"=>"student", "PWD"=>"1234");

        //using php function to connect to database using settings above
        $this->conn = sqlsrv_connect( $serverName, $connectionInfo);

        //check if connection is successful or not
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
        die( print_r( sqlsrv_errors(), true));  //this line of code terminates or ends the program completely
        }     
        $i = 0;
        while( $obj = sqlsrv_fetch_object( $stmt))  
        {  
        $rs[$i++] = $obj;
        /*echo $obj->LastName.", ".$obj->FirstName."<br>"; */      
        }
        return $rs ;
    }

    public function adddb() {
        $mydb = "task 3.1" ;
        $data = array (
            "fld_EMP_ID" => "S26055" ,
            "fld_name" => "TAN" ,
            "fld_depID" => "L004" ,
            "fld_hourrate" => "30.0000"
        ) ;
        $tblname = "tbl_employee" ;

       3
    
        $sql = "INSERT INTO tbl_employee (fld_EMP_ID, fld_name, fld_depID, fld_hourrate)
        VALUES ('S26055', 'TAN', 'L004', '30.0000')"; 

        if ($conn->querydb($sql) === TRUE) 
        {
        echo "New record created successfully";
        } 
        else 
        {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        return $sql ;
    }

    
} 

$conn = new diagram ;
$conn -> connection();
$rs = $conn -> querydb('select * from tbl_project');
echo var_dump($rs);
$conn -> adddb () ;





?>
