<!DOCTYPE html>
<html>
    <head>

        <title>Members List</title>

        <!--Links to CSS files-->
        <link href="../CSS/MemberListTable.css" rel="stylesheet" type="text/css">
        <link href="../CSS/NavigationBar.css" rel="stylesheet" type="text/css">     
        <link href="../CSS/Pagination.css" rel="stylesheet" type="text/css"> 

        <!--Link to Javascript files-->    
        <script src="../Javascript/MemberList.js"></script> 
        
    </head>

    <body>
        <!--1. Display navigation bar-->
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>
        
        <!--2. Draw table using PHP-->
        <div>
            <?php
                
                //import custom php classes
                include_once("../MyClassLibraries/Tables.php");
                include_once("../../AdvancedProgramming//MyClassLibraries//MyDatabase.php");

                echo "<br>";
                echo "<br>";
                echo "<br>";

                //default query to execute
                $main_querySQL = "select 
                        fld_id as [ID],
                        fld_name as [Name], 
                        CONVERT(varchar, fld_dob, 23) as [DOB] , 
                        fld_address as [Address], 
                        fld_weight as [Weight], 
                        fld_height as [Height], 
                        CONVERT(varchar, fld_datejoined, 23) as [Date Joined] 
                        from tbl_members"; 

                $filterSQL = "";     

                //Check if a server request is made with data being sent over the POST method, i.e the
                //search feature is being used
                if(isset($_POST['txtName']) || isset($_POST['txtEmail']) || isset($_POST['txtAddress']))
                { 
                                       
                    //build a default filter that will always be applied
                    $filterSQL = " WHERE fld_username IS NOT NULL ";

                    //append other filters if corresponding search textboxes are filled in by user
                    if(isset($_POST['txtName']) && str_replace(' ', '', $_POST['txtName']) != '')
                        $filterSQL = $filterSQL . " AND fld_name LIKE '%" . $_POST['txtName'] . "%'"; 

                    if(isset($_POST['txtAddress']) && str_replace(' ', '', $_POST['txtAddress']) != '')                   
                        $filterSQL = $filterSQL . " AND fld_address LIKE '%" . $_POST['txtAddress'] . "%'"; 

                    if(isset($_POST['txtEmail']) && str_replace(' ', '', $_POST['txtEmail']) != '')                 
                        $filterSQL = $filterSQL . " AND fld_email LIKE '%" . $_POST['txtEmail'] . "%'";                       
                }

                //OrderBy SQL
                $orderbySQL = " ORDER BY fld_id ASC ";

                //PAGINATION CODE                
                $pageSize = 5;
                $pageSizeSQL = " FETCH NEXT " .  $pageSize . " ROWS ONLY ";//this is the default pagesize
                
                //change pageno according to user input
                if(isset($_POST['txtPageNo']) && $_POST['txtPageNo'] != '')
                {
                    $pageNo = $_POST['txtPageNo'];

                    //left arrow - first record in first page
                    if($pageNo == '«')
                    {
                        $pageNo = 1;                        
                    }
                    //Right arrow - first record in last page
                    elseif($pageNo == "»")
                    {
                        //Make connection to database
                        $db = new MyDatabase;
                        $db->makeConnection();
                        //execute query
                        $rs = $db->querydb($main_querySQL . $filterSQL);
                        if(is_null($rs))
                        {
                            echo "No records found";                            
                        }
                        else
                        {
                            //load last page records
                            $totalRecords = count($rs);
                            $pageNo = ceil($totalRecords / $pageSize);
                            $rowno = ($pageNo - 1) * $pageSize; 
                        } 
                        $db->closeConnection();                      
                    }
                   
                    $rowno = ($pageNo - 1) * $pageSize; 
                    $rowNoSQL = " OFFSET " .  $rowno  . " ROWS";                                      
                }
                else
                { 
                    $pageNo = 1;                   
                    $rowNo = ($pageNo - 1) * $pageSize;
                    $rowNoSQL = " OFFSET " .  $rowNo . " ROWS "; //default rowno
                }

                //build final query
                $final_querySQL = $main_querySQL . $filterSQL . $orderbySQL . $rowNoSQL . $pageSizeSQL;

                //Make connection to database
                $db = new MyDatabase;
                $db->makeConnection();

                //execute query
                $rs = $db->querydb($final_querySQL);

                //check if query returns null value
                if(is_null($rs))
                {
                    echo "No matching data found";
                    echo "<br>";
                    echo "<br>";
                    //echo $query;
                }
                else
                {
                    //Display employees table
                    $table = new Tables;
                    $table->drawHTMLTable($rs,"tbl_memberList");
                }               
            ?>
           
        </div>

        <?php

                $rs = $db->querydb($main_querySQL . $filterSQL);
                if(is_null($rs))
                {
                    die("No data");
                }
                else
                {
                    include_once("../MyClassLibraries/Pagination.php");
                    $pagination = new Pagination;
                    $pagination->drawPagination($rs, $pageSize, $pageNo, "pagination", "active");                    
                }               

        ?>
        
        <!-- Member Search List UI-->
        <div id="divMembersSearch">
            <form action="MembersList.php" method="post"> 
                <table>
                    <tr>
                        <td>Name: </td>
                        <td><input type="text" id="txtName" name="txtName" value=""></td>
                        <br><br>
                    </tr>

                    <tr>
                        <td>Address:&nbsp</td>
                        <td><input type="text" id="txtAddress" name="txtAddress" value=""></td>
                        <br><br>
                    </tr>                  

                    <tr>
                        <td>Email:</td> 
                        <td><input type="text" id="txtEmail" name="txtEmail" value=""></td>
                        <br><br>
                    </tr>                        
                    
                    <tr>
                        <td colspan="0">
                           <input id="btnSearch" type="submit" value="Submit" >
                        </td>
                        <td colspan="0">
                            <button id="btnReset" type="button" onclick="clearSearchBoxes();">Reset</button>
                        </td>
                    </tr>   
                </table> 

                <input id="txtPageNo" type="text" name="txtPageNo" value=""  size="100" readonly>                        
                
            </form> 
            
        </div>     
       
    </body>
    <footer>
        <!--Event listeners added here because it can only access targeted tags after they have
        been rendered in body tag-->
        <script type="text/javascript">
            <?php 
                if(isset($_POST['txtName']))
                {                             
                    echo 'document.getElementById("txtName").value = "' . $_POST['txtName'] . '";';
                    echo 'document.getElementById("txtEmail").value = "' . $_POST['txtEmail'] . '";';
                    echo 'document.getElementById("txtAddress").value = "' . $_POST['txtAddress'] . '";';
                    echo 'document.getElementById("txtPageNo").value = "' . $_POST['txtPageNo']  . '";';                  
                }
                else
                {                    
                    echo 'document.getElementById("txtPageNo").value = "' . $pageNo  . '";';                      
                }                      
            ?>    
        </script>         
    </footer>
</html>


