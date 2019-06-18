<?php

$input= array('1','15','7','1','2','5','7','8','9','66','33','8','8','8');
$arrcount = array(array());

for($i=0; $i<count($input) ; $i++)
{
    
    
        $arrcount[$i][0] = $input[$i];
        $arrcount[$i][1] = 1;
    
}


for($i=0; $i<count($input) ; $i++)
{
    
    for($j=0; $j<count($input) ; $j++)
    {
        if($i != $j)
        {
            if($input[$j] == $input[$i])
            {
                $arrcount[$i][1] = $arrcount[$i][1] + 1;                
            }
        }
    }

}

//$result = array_unique($input);
echo var_dump($arrcount);



?>


