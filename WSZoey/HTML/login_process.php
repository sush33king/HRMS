<?php

session_start();
//Include Class
include("web_classes.php");

function sanitize($data) 
{
    if (!isset($data)) {return '';}
    if (is_numeric($data)) {return $data;}

    $non_displayables = array
    (
        '/%0[0-8bcef]/',            // url encoded 00-08, 11, 12, 14, 15
        '/%1[0-9a-f]/',             // url encoded 16-31
        '/[\x00-\x08]/',            // 00-08
        '/\x0b/',                   // 11
        '/\x0c/',                   // 12
        '/[\x0e-\x1f]/'             // 14-31
    );

    foreach ( $non_displayables as $regex )
    {
    $data = preg_replace( $regex, '', $data );
    $data = str_replace("'", "''", $data );
    return $data;
    }
}

//User Details
$email = sanitize($_POST['email']);
$password = sanitize($_POST['password']);

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

    //Query String
    $queryString = "SELECT * FROM tbl_users 
                    WHERE fld_email = '$email' 
                    AND fld_password = '$password'";

    //Connection
    $connection = new MyDatabase("ZOELLON\SQLEXPRESS",
                                 array("Database"=>"db_website"));

    $connection1 = $connection->makeConnection();

    $_SESSION['user'] = $email;

    //Query
    $query = $connection->loginDB($queryString);


}

?>