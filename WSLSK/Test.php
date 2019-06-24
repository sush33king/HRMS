<?php
/// Script start

/// Creates variable $dice and sets the content to a random number between the 1 and 6
$dice = rand(1,6);

/// Display $dice 
echo $dice;

/// If $dice is a 6 then display echo message
if($dice == 6) {
echo "Good Job! you threw a 6.";
}

/// If $dice is lower then 3 display echo message
if($dice < 3) {
echo "Don't give up try again!";
}

/// Script end
?>