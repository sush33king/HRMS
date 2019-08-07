<?PHP
  include ('data.php');

  header("Location: Login.html");
  
    if(isset($_POST['submit']))
    {
      $Name = $_POST['name'];
      $Age = $_POST['age'];
      $email = $_POST['Email'];
      $address = $_POST['Address'];
      $country = $_POST['Country'];
      $height = $_POST['Height'];
      $weight = $_POST['Weight'];
      $gender = $_POST['Gender'];
      $username = $_POST['username'];
      $Password = $_POST['pwd'];
      $repeatpassword = $_POST['pwd'];

      if ($Name === null)
      {
        echo "Please enter your name.";
      }
      elseif($Age === null) 
      {
        echo "Please enter your age.";
      } 
      elseif($email === null) 
      {
        echo "Please enter a valid Email address.";
      } 
      elseif($address === null) 
      {
        echo "Please enter a valid address.";
      } 
      elseif($country === null) 
      {
        echo "Please choose your country." ;
      } 
      elseif($height === null) 
      {
        echo "Please choose your height.";
      } 
      elseif($weight === null) 
      {
        echo "Please choose your weight.";
      } 
      elseif($gender === null ) 
      {
        echo "Please choose your gender." ;
      } 
      elseif($username === null) 
      {
        echo "Please enter a username.";
      } 
      elseif($Password === null) 
      {
        echo "Password at least 8 character.";
      } 
      elseif($repeatpassword === null) 
      {
        echo "Repeat password does not match.";
      } 
      else
      {

        //make connection
        $conn = new database;
        $conn -> connection();

        //get ids for gender and country
        $contryid= $conn->querydb("select fld_ID from tbl_Country where fld_Country = '" . $country . "'"); 
        $contryid = $contryid[0]->fld_ID;
        $genderid = $conn->querydb("select fld_ID from tbl_Gender where fld_Gender = '" . $gender . "'");
        $genderid = $genderid[0]->fld_ID;
        $data = array(  "fld_Name"=>$Name,
                      "fld_Age"=>$Age,
                      "fld_Email"=>$email,
                      "fld_Address"=>$address,
                      "fld_Country"=>$contryid,
                      "fld_Height"=>$height,
                      "fld_Weight"=>$weight,
                      "fld_Gender"=> $genderid,
                      "fld_Username"=>"$username",
                      "fld_Password"=>"$Password"
                  );
        $tblName = "tbl_Member";
        $conn->adddb($data, $tblName);
      } 
  }
  
?>