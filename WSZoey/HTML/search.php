<?php
//Include Class
include("web_classes.php");

//User Details

//Query
if ($searchfield == 'all')
{
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_name LIKE '%$query%') 
    OR (fld_age LIKE '%$query%') 
    OR (fld_heightcm LIKE '%$query%')
    OR (fld_weightkg LIKE '%$query%') 
    OR (fld_address LIKE '%$query%') 
    OR (fld_country LIKE '%$query%')
    OR (fld_gender LIKE '$query%') 
    OR (fld_email LIKE '%$query%') 
    OR (fld_hobby LIKE '%$query%')
    OR (fld_dayjoined LIKE '%$query%')";
}

elseif ($searchfield == 'name') 
{
    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_name LIKE ''%$query%'') ORDER BY fld_name DESC',

    @pageNumber = $pagenum,
    
    @pageSize = 1; "; 

}


elseif ($searchfield == 'age') 
{
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_age LIKE '%$query%')";
}

elseif ($searchfield == 'height') 
{
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_heightcm LIKE '%$query%')"; 
}

elseif ($searchfield == 'weight') 
{
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_weightkg LIKE '%$query%')"; 
}

elseif ($searchfield == 'address') 
{
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_address LIKE '%$query%')"; 
}

elseif ($searchfield == 'country') 
{
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_country LIKE '%$query%')"; 
}

elseif ($searchfield == 'gender') 
{
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_gender LIKE '$query%')";
}

elseif ($searchfield == 'email') 
{
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_email LIKE '%$query%')"; 
}

elseif ($searchfield == 'hobby') 
{
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_hobby LIKE '%$query%')"; 
}

elseif ($searchfield == 'dayjoined') 
{
    $queryString = "SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_dayjoined LIKE '%$query%')"; 
}

//Connection
$connection = new MyDatabase("ZOELLON\SQLEXPRESS", array("Database"=>"db_website"));
$connection1 = $connection->makeConnection();

//Query
$query = $connection->searchDB($queryString);
echo var_dump($query);

echo '<form action="search.php" method="GET">';
echo '<input type="radio" name="pagenumber" value="1"'; 
echo 'checked> <text>1</text>';
echo '<input type="radio" name="pagenumber" value="2"'; 
echo '<text>2</text>';
echo '<input type="submit" value="Search" />';
echo '</form>';
?>