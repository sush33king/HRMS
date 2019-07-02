<?php

    //echo phpinfo();

    //setting the value for "serverName\instanceName"
    $serverName = "127.0.0.1\\sqlexpress"; 

    //additional information for making connection to database
    $connectionInfo = array( "Database"=>"AMOS", "UID"=>"sa", "PWD"=>"password");

    //using php function to connect to database using settings above
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    //check if connection is successful or not
    if( $conn ) {
        echo "Connection established.<br />";
    }else{
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));
    }

addDB(array("employeeid"=>"E002", "departmentid"=>"D01","employeename"=>"ultraman"),"employees");

//____________________________________________________________________________________________________________________________

    function addDB($data, $tblName)
    {
        global $conn;
        //1. get concatenated field names and field data 
        $fldNames = "";
        $fldData = "";
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

        $stmt = sqlsrv_query( $conn, $sql);

        if( $stmt === false )  
        {  
            echo "Error in query preparation/execution.\n";  
            die( print_r( sqlsrv_errors(), true));  //this line of code terminates or ends the program completely
        }  
        else
        {
            echo "Record successfully added!";
        }
    }



?>


