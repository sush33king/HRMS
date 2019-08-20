<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="memberlistss.css?version=1">
</head>
<body>
        <?php   
                session_start();               
             
             if (isset( $_SESSION["LoginStatus"]))
             {
                     if ( $_SESSION["LoginStatus"] != 1)
                     {
                             die("Not authorise");
                     }
             }
             else
             {
                die("Not authorise");
             }
            
             include ('process.php');

            //make connection
            $conn = new process;
            $conn -> connection();

            //query
            $where_filter = "";
            if (isset($_POST['search'], $_POST['fldsearch']))
            {
               $where_filter = " WHERE " . $_POST['fldsearch'] . " like '" . $_POST['search'] . "%'" ; 
               $query = "SELECT fld_Name, fld_Age, fld_Email,  fld_Address, fld_Country, fld_Height,
               fld_Weight, fld_Gender from tbl_Member " . $where_filter;
               
            }
            else
            {
               $query = "SELECT fld_Name, fld_Age, fld_Email,  fld_Address, fld_Country, fld_Height,
               fld_Weight, fld_Gender from tbl_Member" ;
            
            }
            

            $userdata = $conn->querydb($query);
            
        ?>
<form action="member_lists.php" method="post">
<label class="field" name=fldsearch for="filter">Search by</label>
                <select id="search"  class="dropdown-btn" name="fldsearch">
                            <option value="fld_Name">Name</option>
                            <option value="fld_Age">Age</option>
                            <option value="fld_Email">Email</option>
                            <option value="fld_Address">Address</option>
                            <option value="fld_Country">Country</option>
                            <option value="fld_Height">Height</option>
                            <option value="fld_Weight">Weight</option>
                            <option value="fld_Gender">Gender</option>
                </select> 

<label class="field" for="filter">Search Key</label>
<input type="text" name=search action="member_lists.php" placeholder="Search ..." title="Type in a name">
<input type="submit" name="Submit" value="Search">
</form>
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