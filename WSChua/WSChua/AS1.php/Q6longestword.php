<?php
//initialize data in array
$word = array ("iphone", "Samsung", "LG", "Huawei", "Nokia" );

//intitialize temporary storage to be used for processing - helping to determine longest word
$max = 0;
$longestword = "";

//loop through $word array and determine longest word in the process
for ($i = 0; $i < count($word); $i++ )
{
    //echo $word[$i];
    //update temp variables with longer words data
    if (strlen($word[$i]) > $max)
    {
        $max = strlen($word[$i]);
        $longestword = $word[$i];
    }    
}

echo "longest word is" . $longestword;
