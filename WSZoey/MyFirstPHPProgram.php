<?php
// Display greeting message
echo "Greeting Messages: <br>";
echo "Good Morning! <br>";
?>

<?php
// Comments
// This is a single line comment
# This is also a single line comment
/*This is a multi
line comment */
echo "Good Afternoon!<br>";
?>

<?php
// Declaring variables
//$var_name = value
$txt = "Good Evening!<br>";
$number = "14 <br>";
 
// Displaying variables value
echo "<br>Variable Command Test: <br>";
echo $txt;  // Output: Good Evening!
echo $number; // Output: 14
?>

<?php
// Defining constant
// define() function accepts two arguments: the name of the constant, and its value
define("SITE_URL", "<h4 style='color: blue;'> www.facebook.com</h4>");
 
// Using constant
echo '<br>Constant Command Test:<br>';
echo 'Thank you for visiting - ' SITE_URL;
echo '<br>';
?>

<?php
// Displaying string of text
echo "<br> Echo Command Test: <br>";
echo "Hello People!<br>";

// Displaying HTML code
echo "<h4>This text is black.</h4>";
echo "<h4 style='color: red;'>This text is red.</h4>";
?>