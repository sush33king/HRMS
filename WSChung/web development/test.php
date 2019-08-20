<?php
include ('data.php');

$conn = new database;
$conn -> connection();

$queryid = ("SELECT fld_Firstname, fld_Lastname, fld_Age, fld_Email,  fld_Address, fld_Country, fld_Height,
fld_Weight, fld_Gender, fld_Username, fld_Password from tbl_menber" );

$userdata = $conn->querydb($queryid);

foreach($userdata as $item){
    echo $item->fld_Firstname ,fld_Lastname, fld_Age, fld_Email,  fld_Address, fld_Country, fld_Height,
    fld_Weight, fld_Gender, fld_Username, fld_Password;
  }
return ($item) ;

?>


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