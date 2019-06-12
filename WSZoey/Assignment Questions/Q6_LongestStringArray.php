<?php
$string = array(
    "Kindergarten",
    "Elementary",
    "Middle School",
    "High School",
    "University"
);

$charactercount = 0;
$max = 0;
$longeststring = 0;

for ($x = 0; $x < count($string); $x++) {
    $charactercount = strlen ($string[$x]);
    if ($charactercount > $max) {
        $max = $charactercount;
        $longeststring = $string[$x];
    }    
}


echo "The longest string is ". $longeststring;





?>
