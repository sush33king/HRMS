<!DOCTYPE html>
<html>
<link   rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Butterfly+Kids&display=swap">
<link   rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap">
<head>
<style>
p {
  color: blue;
  font-family: 'Butterfly Kids', cursive;
  font-size: 30px;
}

input[type=text] {
  color: grey;
  font-family: 'Shadows Into Light', cursive;
  font-size: 20px
}

input[type=submit] {
  color: black;
  font-family: 'Butterfly Kids', cursive;
  font-size: 20px
}

input[type=password] {
    display: block;
    font: .9rem 'Fira Sans', sans-serif;
    font-size: 30px
}

</style>
</head>
<body>
<form action="/action_page.php">
  Name:<br>
  <input type="text" name="name" value="LSK"><br>
  Username:<br>
  <input type="text" name="username" value="LSK2018"><br>
  Password:<br>
  <input type="password" name="pwd" value="LSK" minlength="8"><br>
  Address:<br>
  <input type="text" name="address" value="SHAH ALAM"><br>
  Age:<br>
  <input type="text" name="age" value="18"><br>
  School:<br>
  <input type="text" name="school" value="ENLITEN"><br>
  Gender:<br>
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other<br>
  <input type="submit" value="Submit">
</form>    

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</body>
</html>                                                                                                          