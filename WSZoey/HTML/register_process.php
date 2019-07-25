<?php
//Include Class
include("web_classes.php");

//User Details
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cfmPassword = $_POST['cfmpassword'];
$country = $_POST['country'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$occupation = $_POST['occupation'];

if ($firstName == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($lastName == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($email == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($password == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($cfmPassword == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($country == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($birthday == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($gender == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($occupation == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($password != $cfmPassword)
{
    echo "Your password and confirmation password does not match!";
}

else
{
    //Connection
    $connection = new MyDatabase("ZOELLON\SQLEXPRESS", array("Database"=>"db_website"));
    $connection1 = $connection->makeConnection();

    //Query Data
    $data = array(  "fld_firstname"=>"$firstName",
                    "fld_lastname"=>"$lastName",
                    "fld_email"=>"$email",
                    "fld_password"=>"$password",
                    "fld_country"=>"$country",
                    "fld_birthday"=>"$birthday",
                    "fld_gender"=>"$gender",
                    "fld_occupation"=>"$occupation"
                 );
    
    $tblname = "tbl_users";

    $add = $connection->addDB($data,$tblname);

}

?>