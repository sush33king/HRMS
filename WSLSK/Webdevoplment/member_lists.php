<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="memberlists.css?version=2">
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
            include ('process.php');

            //make connection
            $conn = new process;
            $conn -> connection();

            //query
            $query = ("select * from tbl_Member" );

            $userdata = $conn->querydb($query);
            
            ?>
        </table>
</body>
</html>