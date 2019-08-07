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
            $query = ("select * FROM tbl_menber" );

            $userdata = $conn->querydb($query);

            if ($userdata->num_rows > 0) {
                // output data of each row
                while($row = $userdata->fetch_assoc()) 
                {
                echo "<tr><td>" . $row["First name"]. "</td><td>" . $row["Last name"] . "</td><td>"
                . $row["Age"] . "</td></tr>". $row["Email"] . "</td></tr>". $row["Address"] . "</td></tr>"
                . $row["Country"] . "</td></tr>". $row["Height"] . "</td></tr>" . $row["Weight"] ." </td></tr>"
                . $row["Gender"] . "</td></tr>". $row["Username"] . "</td></tr>". $row["Password"];
                }
                echo "</table>";
                } 
                else 
                { 
                    echo "0 results"; 
                }

            
        ?>
        </table>
    </body>
</html>