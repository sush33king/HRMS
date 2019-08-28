<!DOCTYPE html>
<html>


<head>
<style>

.DivCentered {
    position:absolute;
    width:350px;
    height:400px;    
    bottom:100px;
    right:25%;
    left:50%;
    margin-left:-150px;
    border:2px solid black;
    background-image: url(source.gif);
    background-size: cover;
}

</style>
</head>
<body>



<div class="DivCentered">
  
  <h2 align="center">Login Screen</h2>

  <form action="login_response.php" method="post">

    <div align="center">

      Username: 
      <input type="text" name="txtFirstname" value="">
      <br><br>
      Password:&nbsp 
      <input type="text" name="txtLastname" value="">
      <br><br>
      <input type="submit" value="Submit">
      <br>
      <a href="register.php">Register a new account</a>
    </div>

</form> 

<!--p>If you click the "Submit" button, the form-data will be sent to a page called "/login_response.php".</p-->
</div>
</body>
</html>
