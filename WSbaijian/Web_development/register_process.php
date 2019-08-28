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
       $data = $conn->querydb("select CTYID from tbl_country where country = '" . $country . "'"); 
        $CTYID = $data[0]->CTYID;
        
        $data = array(  "Firestname"=>$firstname,
                      "Lastname"=>$lastname,
                      "idname"=>$IDname,
                      "age"=>$Age,
                      "Gender"=> $gender,
                      "Address"=>$address,
                      "Height"=>$height,
                      "Weight"=>$weight,
                      "Email"=>$email,
                      "Birthday"=>$Birthday,
                      "Hobbies"=>$hobbies,
                      "Country"=>$CTYID,
                      "Password"=>"$Password"
                  );
        $tblName = "tbl_member";
        $conn->adddb($data, $tblName);

      } 
 
  
?>