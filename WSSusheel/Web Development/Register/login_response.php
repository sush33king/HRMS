<?php

//1. Include class library to help with database access
include_once("../../AdvancedProgramming//MyClassLibraries//MyDatabase.php");

//2. extract form data from $_POST variable 
$username = $_POST['txtFirstname'];
$password = $_POST['txtLastname'];

//3. make connection to database
$db = new MyDatabase;
$db->makeConnection();

//4. prepare query to be executed
$query = "select top 1 * from tbl_members where fld_username = '" . $username . "' and fld_password = '" . $password . "'";

//5. execute query
$userdata = $db->querydb($query);

//6. display data
if(!is_null($userdata))
{    
    header("Location: ../MembersListing/MembersList.php");
}
else
{
    echo "Login Failed";
}

$db->closeConnection();

?>