<?php

echo phpinfo();


    $serverName = "127.0.0.1\\sqlexpress"; //serverName\instanceName
    $connectionInfo = array( "Database"=>"ModernNorthwind", "UID"=>"sa", "PWD"=>"password");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    if( $conn ) {
        echo "Connection established.<br />";
    }else{
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));
    }


superman
batman 



?>