<?php  
/* Connect to the local server using Windows Authentication and  
specify the AdventureWorks database as the database in use. */  
$serverName = "127.0.0.1";  
$connectionInfo = array( "Database"=>"task 3.1",
                         "CharacterSet" => "UTF-8");  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if( $conn === false )  
{  
     echo "Could not connect.\n";  
     die( print_r( sqlsrv_errors(), true));  
}  

/* Set up and execute the query. */  
$tsql = "SELECT *  
         from tbl_project
         LEFT JOIN tbl_project_assigned_employee
         ON tbl_project.fld_projectid = tbl_project_assigned_employee.fld_projectID";

$stmt = sqlsrv_query( $conn, $tsql);  
if( $stmt === false )  
{  
     echo "Error in query preparation/execution.\n";  
     die( print_r( sqlsrv_errors(), true));  //this line of code terminates or ends the program completely
}  
  
/* Retrieve each row as a PHP object and display the results.*/ 
$i = 0;
while( $obj = sqlsrv_fetch_object( $stmt))  
{  
      $rs[$i++] = $obj;
      /*echo $obj->LastName.", ".$obj->FirstName."<br>"; */      
}

echo '<pre>';
print_r($rs);
echo '<pre>';


//create html table
echo '<table border="1">';
$count = count(get_object_vars(($rs[0])));

echo "<tr>"; 
foreach(($rs[0]) as $key => $value) 
{
   
    echo "<th>";
    print " $key\n";
    echo "</th>"; 
}
echo "</tr>"; 

for($i = 0; $i < count($rs); $i++)
{
    echo "<tr>";  

    
    //echo $count;
        
        foreach(($rs[$i]) as $key => $value) 
        {
           
            echo "<td>";
            print " $value\n";
            echo "</td>"; 
        }

        echo "</tr>";   
}

/* Free statement and connection resources. */  
sqlsrv_free_stmt( $stmt);  
sqlsrv_close( $conn);  
?>  