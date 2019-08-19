<?php
include ('database.php');

if(isset($_POST['Log_in']))
{
        $IDname = $_POST['IDname'];
        $password = $_POST['Password'];   

        if ($IDname === NULL)
        {
            echo "Please enter IDname";
        }

        elseif ($password === NULL)
        {
            echo "Please enter a password";
        }

        else
        {
            //Query
            $query = ("select * FROM tbl_Member WHERE IDname = '". $IDname ."' 
            AND Password = '" . $password . "'");

        
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