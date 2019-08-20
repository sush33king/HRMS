<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="memberlists.css?version=1">
</head>
<body>
        <?php
            
            include ('process.php');

            //make connection
            $conn = new process;
            $conn -> connection();

            //query
            $query = ("select * from tbl_Member" );

            $userdata = $conn->querydb($query);
            
        ?>

        <input type="text" name="search">
        <input type="submit" name="submit" value="Search">
            
        <?php
                echo "<body>";
                echo "<table align = center ; id=myTable>";
                echo "  <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Address</th>
                <th>Country</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Gender</th>
                </tr> " ;
                echo "<tr>";
         
foreach($userdata as $item){
   echo "<tr>";
   echo "<td>" . $item->fld_Name . "</td>"; 
   echo "<td>" . $item->fld_Age . "</td>"; 
   echo "<td>" . $item->fld_Email . "</td>";  
   echo "<td>" . $item->fld_Address . "</td>"; 
   echo "<td>" . $item->fld_Country . "</td>"; 
   echo "<td>" . $item->fld_Height . "</td>";
   echo "<td>" . $item->fld_Weight . "</td>"; 
   echo "<td>" . $item->fld_Gender . "</td>"; 
   echo "</tr>";
 }
echo "</table>" ;
echo "</body>";


?>
        </table>
</body>
</html>