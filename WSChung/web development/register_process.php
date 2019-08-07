<?PHP
  include ('data.php');

  header("Location: login.html");
  
    if(isset($_POST['Submit']))
    {
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $Age = $_POST['age'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $country = $_POST['country'];
      $height = $_POST['height'];
      $weight = $_POST['weight'];
      $gender = $_POST['gender'];
      $username = $_POST['username'];
      $Password = $_POST['pwd'];
      $repeatpassword = $_POST['pwd'];

      if ($firstname === null)
      {
        echo "Please enter your firstname.";
      } 
      elseif($lastname === null) 
      {
        echo "Please enter your lastname.";
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
        $contryid= $conn->querydb("select fld_ID from tbl_country where fld_description = '" . $country . "'"); 
        $contryid = $contryid[0]->fld_ID;
        $genderid = $conn->querydb("select fld_ID from tbl_Gender where fld_Gender = '" . $gender . "'" );
        $genderid = $genderid[0]->fld_ID;
        $data = array(  "fld_Firstname"=>$firstname,
                      "fld_Lastname"=>$lastname,
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
        $tblName = "tbl_menber";
        $conn->adddb($data, $tblName);
      } 
  }
  
?>