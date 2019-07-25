<?php
Class MyDatabase
{
    //Temp Variables
    public $var1,$var2,$tblname,$conn;

    //Construct Method
    public function __construct($var1,$var2)
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
    }

    //Connection Method
    public function makeConnection()
    {
        //Constructing Resource Variable
        $conn = sqlsrv_connect($this->var1, $this->var2);

        //Display Connection Status
        if($conn) 
        {
            $this->conn = $conn;
            echo "Connection established.<br />";
        }
        
        else
        {
            echo "Connection could not be established.<br />";
            die( print_r( sqlsrv_errors(), true));
        }
    }

    //Query Method
    public function queryDB($str)
    {
        //Constructing Resource Variable
        $stmt = sqlsrv_query($this->conn, $str);

        if( $stmt == false )  
        {
            echo "Error in query preparation/execution: <br><br>\n";  
            die( print_r( sqlsrv_errors(), true));  
        } 

        elseif ( $stmt == true)
        {
            $i = 0;
            while($obj = sqlsrv_fetch_object($stmt))
            {
                $userinfo[$i++] = $obj;
            }
            
            if (isset($userinfo) == FALSE)
            {
                echo "<br> Login failed, please verify your email address and password. <br>";
            }

            else
            {
                echo "<br> Login Successful! <br>";

                return $userinfo;
            }
        }
    }



    //Update Method
    public function updateDB($updatedata,$where,$tblname)
    {
        //Declaring Variables
        $fldNames = "";
        $fldData = "";

        //Foreach Loop to extract field names and field data from array
        foreach($updatedata as $key => $val)
        {
            
            if($fldNames == "")
            {
                $fldNames = $key; 
                $fldData = "'".$val."'";  
            }   
            else
            {                
                $fldNames = $fldNames. ',' . $key;   
                $fldData = $fldData. ',' . "'".$val."'";     
            }                                 
        }

        //Explode keys and values
        $fldNameArr = explode(",",$fldNames);
        $fldDataArr = explode(",",$fldData);

        //Display data array
        echo var_dump($fldNameArr);
        echo var_dump($fldDataArr);
        
        //For Loop to execute SQL query
        for ($x = 0; $x < count($fldNameArr);$x++)
        {
            $sql = "UPDATE " . $tblname .
                   " SET " . $fldNameArr[$x] . " = " . $fldDataArr[$x] .
                   " WHERE " . $where;

            $stmt = sqlsrv_query( $this->conn, $sql);

            if( $stmt === false )  
            {  
                echo "Error in query preparation/execution: <br><br>\n";  
                die( print_r( sqlsrv_errors(), true));  
            }  
            else
            {
                echo "Record successfully updated!<br><br<br>";
            }
        }
    }

    //Add Method
    public function addDB($data,$tblname)
    {
        
        // Initialize variables to be used
        // to store field names and field data
        $fldNames = "";
        $fldData = "";

        // Loop through array and extract field
        // names and field data from array
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

        // Combine field names and field data values into SQL query
        $sql = "INSERT INTO " . $tblname . "(" . $fldNames . ") " 
               . "VALUES(" . $fldData . ")";

        // Execute prepared SQL query
        $stmt = sqlsrv_query( $this->conn, $sql);

        // Display query status
        if( $stmt === false )  
        {  
            echo "Error in query preparation/execution: <br><br>\n";  
            die( print_r( sqlsrv_errors(), true));
        }  
        else
        {
            echo "Record successfully added!<br>";
        }
    }

    //Delete Method
    public function deleteDB($tblname,$where)
    {
        //SQL Query
        $sql = "DELETE FROM " . $tblname . " WHERE " . $where;

        $stmt = sqlsrv_query( $this->conn, $sql);

        //If error then display error
        if( $stmt === false )  
        {  
            echo "Error in query preparation/execution: <br><br>\n";  
            die( print_r( sqlsrv_errors(), true));
        }  
        else
        {
            echo "Record successfully removed!<br>";
        }
    }

    //Connection End Method
    public function closeConnection()
    {
        $closeconn = sqlsrv_close($this->conn);

        if($closeconn) 
        {
            $this->closeconn = $closeconn;
            echo "Connection closed.<br />";
        }
        
        else
        {
            echo "Connection could not be closed<br />";
            die( print_r( sqlsrv_errors(), true));
        }
    }
}
?>