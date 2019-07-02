<?php



    //setting the value for "serverName\instanceName"
    $serverName = "S1PC5\\sqlexpress"; 

    //additional information for making connection to database
    $connectionInfo = array( "Database"=>"ModernNorthwind", "UID"=>"sa", "PWD"=>"password");

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



?>
