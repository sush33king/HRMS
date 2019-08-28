<?php


//1. Include class library to help with database access
include_once("../../AdvancedProgramming//MyClassLibraries//MyDatabase.php");

//2. make connection to database
$db = new MyDatabase;
$db->makeConnection();

//3. Check if user exists/*
if(isset($_POST['txtUsername']))
    if(!is_null($db->queryDB("SELECT * FROM tbl_members WHERE fld_username = '" . $_POST['txtUsername'] . "'")))
    {      
        echo "Username Exists";
        echo "<br><br>";
        echo '<a href="register.php">Back to registration page</a>';    
        die();            
    }


//4. prepare data to be inserted into tbl_members table
$userdata['fld_name'] =  $_POST['txtName'];
$userdata['fld_address'] =  $_POST['txtAddress'];
$userdata['fld_dob'] =  $_POST['txtDOB'];
$userdata['fld_email'] =  $_POST['txtEmail'];
$userdata['fld_username'] =  $_POST['txtUsername'];
$userdata['fld_password'] =  $_POST['txtPassword'];

//4. insert data into table
$db->addDB($userdata, "tbl_members");

//5. Close connection
$db->closeConnection();

//6. Redirect to login page
header("Location: Login.php");

?>