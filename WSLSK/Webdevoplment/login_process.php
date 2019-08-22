<?php

include ('process.php');
include ('Sanitization.php');

if(isset($_POST['Login']))
{
        $username = $_POST['Username'];
        $password = $_POST['Password'];   

        if ($username === NULL)
        {
            echo "Please enter username";
        }

        elseif ($password === NULL)
        {
            echo "Please enter a password";
        }

        else
        {
            $sanitizer = new Sanitize;
            $username = $sanitizer->clean($username);
            $password = $sanitizer->clean($password);
            
            //Query
            $query = ("select * FROM tbl_Member WHERE fld_Username = '". $username ."' 
            AND fld_Password = '" . $password . "'");

            


            //make connection
            $conn = new process;
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
                $_SESSION["LoginStatus"] = 1;
                echo "Login successfully" ;
                header("Location: member_lists.php");
            }
            
            echo var_dump($userdata);

        }   

}
?>