<?php
include ('database.php');


if(isset($_POST['idname']))
    {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $IDname = $_POST['idname'];
      $Age = $_POST['age'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $height = $_POST['height'];
      $weight = $_POST['weight'];
      $email = $_POST['email'];
      $Birthday = $_POST['bday'];
      $hobbies = $_POST['hobbies'];
      $country = $_POST['Country'];
      $Password = $_POST['password'];    
      
      
        //make connection
        $conn = new mssql;
        $conn->connection();

        //get ids for gender and country
        $CTYID = $conn->querydb("select ID from tbl_country where country = '" . $country . "'"); 
        $CTYID = $contry[0]->ID;
        $GDRID = $conn->querydb("select ID from tbl_Gender where Gender = '" . $gender . "'" );
        $GDRID = $gender[0]->ID;
        $data = array(  "Firstname"=>$firstname,
                      "Lastname"=>$lastname,
                      "IDname"=>$IDname,
                      "Age"=>$Age,
                      "Gender"=> $gender,
                      "Address"=>$address,
                      "Height"=>$height,
                      "Weight"=>$weight,
                      "Email"=>$email,
                      "Birthday"=>$Birthday,
                      "hobbiees"=>$hobbies,
                      "Country"=>$contry,
                      "Password"=>"$Password"
                  );
        $tblName = "tbl_member";
        $conn->adddb($data, $tblName);

      } 
 
  
?>