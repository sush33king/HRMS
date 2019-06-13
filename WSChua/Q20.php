<?php

$input= array('1','15','7','1','2','5','7','8','9','66','33','8');
$arrcount = array(array());




for($i=0; $i<count($input) ; $i++)
{
    
    for($j=0; $i<count($input) ; $j++)
    {
        if($i != $j)
        {
            if($input[$j] == $input[$i])
            {
                $arrcount[$i][0] = $arrcount[$i] + 1;
                $arrcount[$i][1] = $input[$i];
            }
        }
    }

}

//$result = array_unique($input);
echo var_dump($arrcount);



?>


