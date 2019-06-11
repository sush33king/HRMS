<?php
if(isset($_GET['x']))
{
$alpha_flip = $_GET['x'];
 function toNum($data) 
            {
            $alphabet = array( 'a', 'b', 'c', 'd', 'e',
                            'f', 'g', 'h', 'i'
                            );

            $return_value = -1;
            $length = strlen($data);
            }
            for ($i = 0; $i < $length; $i++)   
    {
        $return_value +=
            ([$data[$i]] + 1) * pow(26, ($length - $i - 1));
    }
    return $return_value;
}
?>