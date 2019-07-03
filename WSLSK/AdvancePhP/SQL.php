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
        //declare $conn as global so that addDB() can access it
        global $conn;

        //initialize variables to be used to store field names and field data
        $fldNames = "S";
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
        $stmt = sqlsrv_query( $conn, $sql);

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
echo var_dump($rs);
?>