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
   echo '<link rel= "stylesheet" href="webpage.css?version=14">';
echo "</head>";

//Connection
$connection = new MyDatabase("ZOELLON\SQLEXPRESS", array("Database"=>"db_website"));
$connection1 = $connection->makeConnection();

//PageNum
if (isset($_POST['page']) AND $_POST['page'] == 'nextpage')
{
    $pagenum = $_POST['currentpage'];
    $pagenum = $pagenum + 1;
    
}

elseif (isset($_POST['page']) AND $_POST['page'] == 'prevpage')
{
    $pagenum = $_POST['currentpage'];
    $pagenum = $pagenum - 1;
}

elseif (isset($_POST['page']) AND $_POST['page'] == 'firstpage')
{
    $pagenum = 1;
}

else
{
    $pagenum = 1;
}

//Query
if (isset($_POST['searchfield']) && $_POST['searchfield']=='all')
{
    $searchquery = $_POST['searchquery'];

    $queryString = "EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_name LIKE ''%$searchquery%'') 
    OR (fld_age LIKE ''%$searchquery%'') 
    OR (fld_heightcm LIKE ''%$searchquery%'')
    OR (fld_weightkg LIKE ''%$searchquery%'') 
    OR (fld_address LIKE ''%$searchquery%'') 
    OR (fld_country LIKE ''%$searchquery%'')
    OR (fld_gender LIKE ''$searchquery'') 
    OR (fld_email LIKE ''%$searchquery%'') 
    OR (fld_hobby LIKE ''%$searchquery%'')
    OR (fld_dayjoined LIKE ''%$searchquery%'') ORDER BY fld_name ASC',

    @pageNumber = $pagenum,

    @pageSize = 5; ";
}

elseif (isset($_POST['searchfield']) && $_POST['searchfield']=='name')
{
    $searchquery = $_POST['searchquery'];

    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_name LIKE ''%$searchquery%'') ORDER BY fld_name ASC',

    @pageNumber = $pagenum,
    
    @pageSize = 5; "; 

}

elseif (isset($_POST['searchfield']) && $_POST['searchfield']=='age')
{
    $searchquery = $_POST['searchquery'];

    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_age LIKE ''%$searchquery%'') ORDER BY fld_age ASC',

    @pageNumber = $pagenum,
    
    @pageSize = 5; "; 
}

elseif (isset($_POST['searchfield']) && $_POST['searchfield']=='height')
{
    $searchquery = $_POST['searchquery'];

    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_heightcm LIKE ''%$searchquery%'') ORDER BY fld_heightcm ASC',

    @pageNumber = $pagenum,
    
    @pageSize = 5; "; 
}

elseif (isset($_POST['searchfield']) && $_POST['searchfield']=='weight')
{
    $searchquery = $_POST['searchquery'];

    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_weightkg LIKE ''%$searchquery%'') ORDER BY fld_weightkg ASC',

    @pageNumber = $pagenum,
    
    @pageSize = 5; "; 
}

elseif (isset($_POST['searchfield']) && $_POST['searchfield']=='address')
{
    $searchquery = $_POST['searchquery'];

    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_address LIKE ''%$searchquery%'') ORDER BY fld_address ASC',

    @pageNumber = $pagenum,
    
    @pageSize = 5; "; 
}

elseif (isset($_POST['searchfield']) && $_POST['searchfield']=='country')
{
    $searchquery = $_POST['searchquery'];

    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_country LIKE ''%$searchquery%'') ORDER BY fld_country ASC',

    @pageNumber = $pagenum,
    
    @pageSize = 5; "; 
}

elseif (isset($_POST['searchfield']) && $_POST['searchfield']=='gender')
{
    $searchquery = $_POST['searchquery'];

    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_gender LIKE ''$searchquery%'') ORDER BY fld_gender ASC',

    @pageNumber = $pagenum,
    
    @pageSize = 5; "; 
}

elseif (isset($_POST['searchfield']) && $_POST['searchfield']=='email')
{
    $searchquery = $_POST['searchquery'];

    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_email LIKE ''%$searchquery%'') ORDER BY fld_email ASC',

    @pageNumber = $pagenum,
    
    @pageSize = 5; "; 
}

elseif (isset($_POST['searchfield']) && $_POST['searchfield']=='hobby') 
{
    $searchquery = $_POST['searchquery'];

    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_hobby LIKE ''%$searchquery%'') ORDER BY fld_hobby ASC',

    @pageNumber = $pagenum,
    
    @pageSize = 5; "; 
}

elseif (isset($_POST['searchfield']) && $_POST['searchfield']=='dayjoined') 
{
    $searchquery = $_POST['searchquery'];

    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users 
    WHERE (fld_dayjoined LIKE ''%$searchquery%'') ORDER BY fld_dayjoined ASC',

    @pageNumber = $pagenum,
    
    @pageSize = 5; "; 
}

else
{
    $queryString = " EXEC GetUserInfo2 @query = 'SELECT fld_name, fld_age, fld_heightcm, fld_weightkg, fld_address, 
    fld_country, fld_gender, fld_email, fld_hobby, fld_dayjoined FROM tbl_users ORDER BY fld_name ASC',

    @pageNumber = 1,

    @pageSize = 5; "; 
}

//Query
$query = $connection->searchDB($queryString);

//Body
echo "<body>";

  echo '<div class="a2">';
    echo "<h1> Welcome to the Members page! </h1>";
  echo '</div>';

  echo "<div class='c'>";
    echo '<form action="members_list.php" method="POST">';

      echo '<text class="b"> Search: </text>';
      echo '<input type="inputtext" name="searchquery" placeholder="Search for users here"'; if (isset($_POST['searchquery'])) {echo 'value="' . $_POST['searchquery'] . '" </input>';} else {echo "</input>";}

      echo "&nbsp";

      echo '<text class="b"> Filter: </text>';
      echo'<select name = searchfield>';
        echo '<option value="all"'; if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "all") {echo 'selected="selected" <text>All</text> </option>';} else {echo '<text>All</text> </option>';}
        echo '<option value="name"';  if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "name") {echo 'selected="selected" <text>Name</text> </option>';} else {echo '<text>Name</text> </option>';}
        echo '<option value="age"'; if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "age") {echo 'selected="selected" <text>Age</text> </option>';} else {echo '<text>Age</text> </option>';}
        echo '<option value="height"'; if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "height") {echo 'selected="selected" <text>Height (cm)</text> </option>';} else {echo '<text>Height (cm)</text> </option>';}
        echo '<option value="weight"'; if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "weight") {echo 'selected="selected" <text>Weight (kg)</text> </option>';} else {echo '<text>Weight (kg)</text> </option>';}
        echo '<option value="address"'; if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "address") {echo 'selected="selected" <text>Address</text> </option>';} else {echo '<text>Address</text> </option>';}
        echo '<option value="country"'; if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "country") {echo 'selected="selected" <text>Country</text> </option>';} else {echo '<text>Country</text> </option>';}
        echo '<option value="gender"'; if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "gender") {echo 'selected="selected" <text>Gender</text> </option>';} else {echo '<text>Gender</text> </option>';}
        echo '<option value="email"'; if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "email") {echo 'selected="selected" <text>Email Address</text> </option>';} else {echo '<text>Email Address</text> </option>';}
        echo '<option value="hobby"'; if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "hobby") {echo 'selected="selected" <text>Hobby</text> </option>';} else {echo '<text>Hobby</text> </option>';}
        echo '<option value="dayjoined"';  if (isset($_POST['searchfield']) AND $_POST['searchfield'] == "dayjoined") {echo 'selected="selected" <text>Date Joined</text> </option>';} else {echo '<text>Date Joined</text> </option>';}
      echo '</select>';

      echo "&nbsp";
    
      echo "<input type='radio' name='page' value='firstpage'</input> <text class='c'>First Page </text>";
      echo "<input type='radio' name='page' value='prevpage' </input> <text class='c'>Previous Page</text>";
      echo "<input type='radio' name='page' value='nextpage' </input> <text class='c'>Next Page</text>";
    
      echo "&nbsp &nbsp";
    
      echo '<input class="a" type="submit" value="Search" </input>';
    
      echo "<input type='hidden' name='currentpage' value='$pagenum' </input>";
     
     echo '</form>';
  echo "</div>";

  if (isset($query))
  {
      echo "<div class='a3'>";
        echo "<table>";e
          echo "<tr><th>Users</th> <th>Age (Years)</th> <th>Height (cm)</th> <th>Weight (kg)</th> <th>Address</th> <th>Country</th> <th>Gender</th> <th>Email Address</th> <th>Hobby</th> <th>Date Joined</th></tr>";
     
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
      echo "</div>";
  }

  else
  {
     echo "<div class='b'>";
     echo "<h1> No results found </h1>";
     echo "</div>";
  }

  echo "<div class='d'>";
    echo "<input class='a' type='button' value='Page ".$pagenum."' </input>";
  echo "</div>";
echo "</body";
?>