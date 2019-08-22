<?php

include ('data.php');
include ('Sanitize.php');

if(isset($_POST['Submit']))
{
        $user = $_POST['username'];
        $pass = $_POST['password'];   

        if ($user === NULL)
        {
            echo "Please enter username";
        }

        elseif ($pass === NULL)
        {
            echo "Please enter a password";
        }

        else
        {
            //sanitization the input
            $sanitize = new sanitization;
            $user = $sanitize->clean($user);
            $pass = $sanitize->clean($pass);

            //Query
            $query = ("select * FROM tbl_menber WHERE fld_Username = '". $user ."' 
            AND fld_Password = '" . $pass . "'");

        
            //make connection
            $conn = new database;
            $conn -> connection();

            //Query
            $userdata = $conn->querydb($query);

            if (is_null($userdata))
            {
                echo "Login failed" ;
            }
            else
            {
                session_start();
                $_SESSION["loginstatus"] = 2;
                echo "Login successfully" ;
                header("Location: member_list.php");
            }
            
            //echo var_dump($userdata);

        }   

}
?>