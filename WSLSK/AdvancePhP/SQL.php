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

    public function addDB()
    {

    }
}


$conn = new Diagram;
$conn->makeconnection();
$rs = $conn->queryDB("Select * From tbl_Project");
echo var_dump($rs);
?>