<?PHP
  include ('data.php');
  
    $firstname = $_POST['First name'];
    $lastname = $_POST['Last name'];
    $Age = $_POST['Age'];
    $Email = $_POST['Email'];
    $address = $_POST['Address'];
    $country = $_POST['Country'];
    $gender = $_POST['Gender'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    if($firstname === null) 
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
    elseif($country === null) 
    {
      echo "Please choose your country." 
    } 
    elseif($gender === null ) 
    {
      echo "Please choose your gender." 
    } 
    elseif($Password === null) 
    {
      echo "at least 8 character";
    } 
    else
     {
     
    }

  }
?>