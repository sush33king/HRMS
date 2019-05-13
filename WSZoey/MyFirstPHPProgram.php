<?php
// Display greeting message
echo "Greeting Message: <br>";
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
echo $txt;  // Output: Good Evening!
echo $number; // Output: 14
?>

<?php
// Defining constant
// define() function accepts two arguments: the name of the constant, and its value
define("SITE_URL", "www.facebook.com");
 
// Using constant
echo 'Thank you for visiting - ' . SITE_URL;
?>

<?php
// Displaying string of text
echo "Hello People!";

// Displaying HTML code
echo "<h4>This text is black.</h4>";
echo "<h4 style='color: red;'>This text is red.</h4>";
?>