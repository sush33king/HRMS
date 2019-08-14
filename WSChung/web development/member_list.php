<!DOCTYPE html>
<html>
   <link rel= "stylesheet" href="mems.css">
<head>
<style>
</style>
</head>
<body>

<?php
include ('data.php');

//make connection
$conn = new database;
$conn -> connection();

//query
$where_filter = "";
if (isset($_POST['txtSearch']))
{
   $where_filter = "WHERE " . $_POST['fldSearch'] . " like '" . $_POST['txtSearch'] . "%'" ;    
}

$queryid = ( $mainquery . $where_filter );

$mainquery = "SELECT fld_Firstname, fld_Lastname, fld_Age, fld_Email,  fld_Address, fld_Country, fld_Height,
fld_Weight, fld_Gender, fld_Username, fld_Password from tbl_menber"
 
$userdata = $conn->querydb($queryid);
?>

<h1 align = center>
Users
</h><br>

<label class="field" for="filter">Search by</label>
                <select id="country"  class="dropdown-btn" name="country">
                            <option value="First name">First name</option>
                            <option value="Last name">Last name</option>
                            <option value="Age">Age</option>
                            <option value="Email">Email</option>
                            <option value="Address">Address</option>
                            <option value="Country">country</option>
                            <option value="Height">Height</option>
                            <option value="Weight">Weight</option>
                            <option value="Gender">Gender</option>
                            <option value="Username">Username</option>
                            <option value="Password">Password</option>
                </select> 

<label class="field" for="filter">Search Key</label>
<input type="text" id="myInput" action="member_list.php" placeholder="Search ..." title="Type in a name">

<?php
echo "<body>";
echo "<table align = center ; id=myTable>";
echo "  <tr>
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
        </tr> " ;
         echo "<tr>";
         
foreach($userdata as $item){
   echo "<tr>";
   echo "<td>" . $item->fld_Firstname . "</td>";
   echo "<td>" . $item->fld_Lastname . "</td>"; 
   echo "<td>" . $item->fld_Age . "</td>"; 
   echo "<td>" . $item->fld_Email . "</td>";  
   echo "<td>" . $item->fld_Address . "</td>"; 
   echo "<td>" . $item->fld_Country . "</td>"; 
   echo "<td>" . $item->fld_Height . "</td>";
   echo "<td>" . $item->fld_Weight . "</td>"; 
   echo "<td>" . $item->fld_Gender . "</td>"; 
   echo "<td>" . $item->fld_Username . "</td>"; 
   echo "<td>" . $item->fld_Password . "</td>";
   echo "</tr>";
 }
echo "</table>" ;
echo "</body>";


?>

</body>
</html>
    
          
                
           
            
    
  