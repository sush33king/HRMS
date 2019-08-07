<?php
//Include Class
include("web_classes.php");

//User Details
$email = $_POST['email'];
$password = $_POST['password'];

if ($email == NULL)
{
    echo "Please enter an email address";
}

elseif ($password == NULL)
{
    echo "Please enter a password";
}

else
{
    //Query
    $queryString = "SELECT * FROM tbl_users WHERE fld_email = '$email' AND fld_password = '$password'";

    //Connection
    $connection = new MyDatabase("ZOELLON\SQLEXPRESS", array("Database"=>"db_website"));
    $connection1 = $connection->makeConnection();

    //Query
    $query = $connection->loginDB($queryString);
    echo var_dump($query);

}


?>