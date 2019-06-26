<?php

//echo phpinfo();

    //setting the value for "serverName\instanceName"
    $serverName = "LSKPC\SQLEXPRESS"; 

    //additional information for making connection to database
    $connectionInfo = array( "Database"=>"3.1", "UID"=>"", "PWD"=>"");

    //using php function to connect to database using settings above
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    //check if connection is successful or not
    if( $conn ) {
        echo "Connection established.<br />";
    }else{
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));
    }




?>