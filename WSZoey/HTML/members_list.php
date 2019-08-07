<?php
//Include Class
include("web_classes.php");

//Style
echo '<link  rel=  "stylesheet"'; 
   echo 'href= "https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap">';

echo '<link  rel=  "stylesheet"';
   echo 'href= "https://fonts.googleapis.com/css?family=Titillium+Web&display=swap">';

echo "<head>";
   echo '<script type="text/javascript" src="webpage.js"></script>';
   echo '<link rel= "stylesheet" href="webpage.css?version=5">';
echo "</head>";

//Get All Users
    //Query
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
                   fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users";

    //Connection
    $connection = new MyDatabase("ZOELLON\SQLEXPRESS", array("Database"=>"db_website"));
    $connection1 = $connection->makeConnection();

    //Query
    $query = $connection->queryDB($queryString);
    echo var_dump($query);

//Body
echo "<body>";
echo "<table>";

echo "<tr><th>Users</th> <th>Age (Years)</th> <th>Height (cm)</th> <th>Weight (kg)</th> <th>Address</th> <th>Country</th> <th>Gender</th> <th>Email</th> <th>Hobby</th> <th>Date Joined</th></tr>";

for ($x = 0; $x < count($query); $x++)
{
    echo "<tr>";
    for ($y = 0; $y <  count($query[0]); $y++)
    {
        echo "<td>" . $query[$x][$y] . "</td>";
    }
    echo "</tr>";
}


echo "</table>";
echo "</body";




?>