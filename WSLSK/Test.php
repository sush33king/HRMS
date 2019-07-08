<?php
$serverName = "LSKPC\SQLEXPRESS";
$connOptions = array("Database"=>"3.1","CharacterSet" => "UTF-8");
 $conn = sqlsrv_connect( $serverName, $connOptions );
if( $conn === false )
{
    echo "Could not close.\n"; 
    die( print_r( sqlsrv_errors(), true));
}
else 
{
    echo "Connection close successfully!";
}

sqlsrv_close( $conn );
?>