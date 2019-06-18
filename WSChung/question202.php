<?php
$arr = array("1","15","7","1","2","5","7","8","9","66","33","8","8","8");
$temp_array = array();
echo var_dump(array_count_values($arr));
foreach($arr as $val)
{
    if(isset($temp_array[$val]))
    {
        $temp_array[$val] = $val;
    }else{
        $temp_array[$val] = 0;
    }
}
foreach($temp_array as $val2)
{
    if($val2 > 0)
    {
        echo $val2 . ', ';
    }
}
?>