<?php
//Include Class
include("web_classes.php");

//User Details
$name = $_POST['name'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$address = $_POST['address'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$cfmPassword = $_POST['cfmpassword'];
$hobby = $_POST['hobby'];

if ($name == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($age == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($height == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($weight == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($address == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($country == NULL)
{
    echo "Please fill in all the columns!";
}

elseif ($gender == NULL)
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

elseif ($hobby == NULL)
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
    $connection = new MyDatabase("ZOELLON\SQLEXPRESS", 
                                 array("Database"=>"db_website"));
                                 
    $connection1 = $connection->makeConnection();

    //Query Data
    $data = array(  "fld_name"=>"$name",
                    "fld_age"=>"$age",
                    "fld_heightcm"=>"$height",
                    "fld_weightkg"=>"$weight",
                    "fld_address"=>"$address",
                    "fld_country"=>"$country",
                    "fld_gender"=>"$gender",
                    "fld_email"=>"$email",
                    "fld_password"=>"$password",
                    "fld_hobby"=>"$hobby"
                 );
    
    $tblname = "tbl_users";

    $add = $connection->addDB($data,$tblname);

}

?>