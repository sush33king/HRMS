<?php
include ('process.php');

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
                echo "Login successfully" ;
            }
            
            echo var_dump($userdata);

        }   

}
?>