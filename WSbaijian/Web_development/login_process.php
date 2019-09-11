<?php
include ('database.php');

if(isset($_POST['txtusername']))
{
        $IDname = $_POST['txtusername'];
        $password = $_POST['password'];   

        
        
            //Query
            $query = ("select * FROM tbl_Member WHERE IDname = '". $IDname ."' 
            AND Password = '" . $password . "'");

        
            //make connection
            $conn = new mssql;
            $conn->connection();

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
            
           // echo var_dump($userdata);

          

}
?>