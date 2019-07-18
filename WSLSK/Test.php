<?php
$X = 10; // global scope
function Test()
{
echo $X; // local scope
}
Test();
?>