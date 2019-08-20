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
if (isset($_POST['search'], $_POST['fldsearch']))
{
   $where_filter = " WHERE " . $_POST['fldsearch'] . " like '" . $_POST['search'] . "%'" ; 
   $mainquery = "SELECT fld_Firstname, fld_Lastname, fld_Age, fld_Email,  fld_Address, fld_Country, fld_Height,
   fld_Weight, fld_Gender, fld_Username, fld_Password from tbl_menber " . $where_filter;
   
}
else
{
   $mainquery = "SELECT fld_Firstname, fld_Lastname, fld_Age, fld_Email,  fld_Address, fld_Country, fld_Height,
   fld_Weight, fld_Gender, fld_Username, fld_Password from tbl_menber" ;

}


$userdata = $conn->querydb($mainquery);

?>

<h1 align = center>
Users
</h><br>
<form action="member_list.php" method="post">
<label class="field" name=fldsearch for="filter">Search by</label>
                <select id="country"  class="dropdown-btn" name="country">
                            <option value="fld_First name">First name</option>
                            <option value="fld_Last name">Last name</option>
                            <option value="fld_Age">Age</option>
                            <option value="fld_Email">Email</option>
                            <option value="fld_Address">Address</option>
                            <option value="fld_Country">country</option>
                            <option value="fld_Height">Height</option>
                            <option value="fld_Weight">Weight</option>
                            <option value="fld_Gender">Gender</option>
                </select> 

<label class="field" for="filter">Search Key</label>
<input type="text" name=search action="member_list.php" placeholder="Search ..." title="Type in a name">

<input type="submit" name="Submit" value="Search">
</form>
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
   echo "</tr>";
 }
echo "</table>" ;
echo "</body>";


?>

</body>
</html>
    
          
                
           
            
    
  