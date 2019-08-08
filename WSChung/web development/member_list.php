<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <table border = 2>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Address</th>
                <th>Country</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Gender</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <?php
            include ('data.php');

            //make connection
            $conn = new database;
            $conn -> connection();

            //query
            $query = ("select * from tbl_menber" );

            $userdata = $conn->querydb($query);
            
            
            ?> 
            
    
        </table>
    </body>
</html>