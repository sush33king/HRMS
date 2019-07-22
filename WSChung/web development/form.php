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

</style>
</head>
<body>
<form action="/action_page.php">
  First name:<br>
  <input type="text" name="name" value="LSK"><br>
  Address:<br>
  <input type="text" name="address" value="SHAH ALAM"><br>
  Age:<br>
  <input type="text" name="age" value="18"><br>
  School:<br>
  <input type="text" name="school" value="ENLITEN"><br><br>
  <input type="submit" value="Submit">
</form>    

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
</body>
</html>                                                                                                          