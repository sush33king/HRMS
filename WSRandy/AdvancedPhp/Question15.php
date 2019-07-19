<?php
class datab_
{   
    private $conn;

    public function connection(){
        //naming the value for "serverName"
        $serverName = "PHIS-NBK-PM1"; 

        //extra information for to connect to database
        $connectionInfo = array( "Database"=>"db_hrms", "UID"=>"sa", "PWD"=>"password123");

        //using php function to connect to the database with settings used above
        $this->conn = sqlsrv_connect( $serverName, $connectionInfo);

        //verify if the connection is made
        if( $this->conn ) {
            echo "Successfully made connection.<br />";
        }
        
        else{
            echo "Connection failed to connect.<br />";
            die( print_r( sqlsrv_errors(), true));
        }
    }

    public function querydb($str) {
        $stmt = sqlsrv_query($this->conn, $str);  
        if( $stmt === false )  
        {  
        echo "Error in query preparation/execution.\n";  
        die( print_r( sqlsrv_errors(), true));  //the program is terminated by this code
        }     
        $i = 0;
        while( $obj_ = sqlsrv_fetch_object( $stmt))  
        {  
        $rs[$i++] = $obj_;
        /*echo $obj_->LastName.", ".$obj_->FirstName."<br>"; */      
        }
        return $rs ;
    }

    public function adddb($data, $table_Name) {

        //variables initialized to store field names and field data
        $field_Names = "";
        $field_Data =  "";
    
        //extract field names and field data by looping through the array
        foreach($data as $key => $value_)
        {
                
            if($field_Names == "")
                {
                    $field_Names = $key; 
                    $field_Data = "'" . $value_ . "'";  
                }   
                else
                {                
                    $field_Names = $field_Names .  ',' . $key;   
                    $field_Data = $field_Data . ',' . "'" . $value_ . "'";     
                }                                 
            }
    
        //the sql query is made up of the combination of both field names and data values
        $sql = "INSERT INTO " . $table_Name . "(" . $field_Names . ") " . "VALUES(" . $field_Data . ")";
    
        //executing sql query
        $stmt = sqlsrv_query( $this->conn, $sql);
    
        //display error if detected one
        if( $stmt === false )  
        {  
                echo "Error.\n";  
                die( print_r( sqlsrv_errors(), true));  //the program is terminated by this code
        }
            else //displays the following message if it worked
        {
                echo "Added without error";
        }
    }    

    public function deletedb($table_Name, $where_condition) {

        $sql = "DELETE FROM ".$table_Name." WHERE ".$where_condition.""; 

        $stmt = sqlsrv_query( $this->conn, $sql);
    
        if ($stmt === false) 
        {
        echo "Failed to delete record:";
        }       
        else 
        {
        echo "Deleted record without error" ;
        }

    }

    public function update($table_Name, $field_data, $where_condition) {
        
        $sql = "UPDATE ".$table_Name." SET ".$field_data." WHERE ".$where_condition."";  

        $stmt = sqlsrv_query( $this->conn, $sql);
    
        if ($stmt === false) 
        {
        echo "Failed to update record:";
        }       
        else 
        {
        echo "Record updated without error" ;
        }
    }
    public function closeconnection()
    {
        sqlsrv_close($this->conn) ;
        if($this->conn === false)  
        {
            echo "Could Not terminate connection."; 
            die( print_r( sqlsrv_errors(), true));
        }
        else
        {
            echo "Successfully terminated connection."; 
        }
        
    }
    

}


//TESTING SECTION

//1. Test make connection with db
$db = new datab_;
$db ->connection();

//2. Test query database
$data = $db->querydb("select * from tbl_Employees");
echo var_dump($data);

//3. Test adding data
/*$data = array("fld_EmpId"=>"A10", 
              "fld_Name"=>"Joyce" ,
              "fld_DeptID"=>"B01" ,
              "fld_Salary" => "5300",
              "fld_Postion"=>"Sales Manager",
              "fld_Age"=>"32",
              "fld_Gender"=>"Female"
            );

$tblName = "dbo.tbl_Employees";

$db->adddb($data, $tblName); */

//4. Update

//make connection
/*$db = new datab_;
$db->connection();

//prepare data
$tblName = "tbl_Employees";
$data = "fld_Name = 'Joyce', fld_Salary = '5500'";
$criteria = "fld_EmpId = 'A10'";

//run updata function using prepared data
$db->update($tblName, $data, $criteria);*/


/*//5. Delete
//make connection
$db = new datab_;
$db->connection();

//prepare data
$tblName = "tbl_Employees";
$criteria = "fld_EmpId = 'A10'";

//run update function using prepared data
$db->deletedb($tblName, $criteria);*/


?>