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

    //test addDB function
    $data = array("employeeid"=>"E002", "departmentid"=>"D01","employeename"=>"ultraman");
    $tablename = "employees";
    addDB($data,$tablename);

//____________________________________________________________________________________________________________________________

    function addDB($data, $tblName)
    {
        //declare $conn as global so that addDB() can access it
        global $conn;

        //initialize variables to be used to store field names and field data
        $fldNames = "";
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


    function db_update_data_in_table($array_data, $tbl_name, $where_statement)
    {
        //declare $conn as global so that addDB() can access it
        global $conn;

        //initialize variables to be used to store field names and field data
        $fldNames = "";
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
        $sql = "UPDATE " . $tblName . "(" . $fldNames . ") " . "VALUES(" . $fldData . ")";

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


?>


