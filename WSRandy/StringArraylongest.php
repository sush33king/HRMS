<?php 

$text = array("mom","pint","kettle");

$max = 0;
$Ltext = "";

for ($z=0; $z < count($text); $z++)
{
    
    if (strlen($text[$z]) > $max)
    {
        $max = strlen($text[$z]);
    
        $Ltext = $text[$z];
    }
    
}

echo "longest word is" . $Ltext;
echo "<br>";
?>