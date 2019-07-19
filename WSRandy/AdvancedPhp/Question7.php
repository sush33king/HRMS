<?php

class test
{
    const changes = 'hehe xd';//doesn't use $ symbol and cant be changed

    function showConstant() {
        echo  self::changes . "\n";
    }
}

echo test::changes . "\n";

?>