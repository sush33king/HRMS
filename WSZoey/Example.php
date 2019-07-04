<?php

$site_path_var = $_SERVER["SITE_HTMLROOT"];

$GlobalVar = 10;

function Subtract5(&$var1)
{
    $LocalVar = 5;
    $var1 = $var1 - $LocalVar;
}

Subtract5($GlobalVar);

echo $GlobalVar;
?>