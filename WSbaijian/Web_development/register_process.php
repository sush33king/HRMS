<?php
include ('database.php')

header("location: log_in.html")
if(isset($_POST['sign_up']))
    {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $IDname = $_POST['IDname'];
      $Age = $_POST['age'];
      $gender = $_POST['gender'];
      $address = $_POST['address'];
      $height = $_POST['height'];
      $weight = $_POST['weight'];
      $email = $_POST['email'];
      $Birthday = $_POST['Birthday'];
      $hobbies = $_POST['hobbies'];
      $country = $_POST['country'];
      $Password = $_POST['pwd'];
     
      if ($firstname === null)
      {
        echo "your firstname.";
      } 
      elseif($lastname === null) 
      {
        echo "your lastname.";
      } 
      elseif($IDname === null){
        echo "your idname.";
      }
      elseif($Age === null) 
      {
        echo "your age.";
      } 
      elseif($gender === null ) 
      {
        echo "your gender." ;
      }
      elseif($address === null) 
      {
        echo "your address.";
      }  
      elseif($height === null) 
      {
        echo "your height.";
      } 
      elseif($weight === null) 
      {
        echo "your weight.";
      }  
      elseif($email === null) 
      {
        echo "your Email.";
      }
      elseif($Birthday === null){
        echo "your Birthday."
      }
      elseif($hobbies === null){
        echo "your hobbies"
      }
      elseif($country === null) 
      {
        echo "your country." ;
      } 
      elseif($Password === null) 
      {
        echo "Password at least 8 character.";
      } 

      else
      {

        //make connection
        $conn = new database;
        $conn -> connection();

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
                      "hobbiees"=>$hobbies
                      "Country"=>$contry,
                      "Password"=>"$Password"
                  );
        $tblName = "tbl_member";
        $conn->adddb($data, $tblName);
      } 
  }
  
?>