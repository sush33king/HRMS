<?php
Class sanitization
{
    Public function clean($data)
    {
        $data = str_replace("'","",$data);
        $data = str_replace("=","",$data);
        $data = str_replace("@","",$data);
        $data = str_replace("!","",$data);
        $data = str_replace("$","",$data);
        $data = str_replace("%","",$data);
        $data = str_replace("^","",$data);
        $data = str_replace("&","",$data);
        $data = str_replace("*","",$data);
        $data = str_replace("?","",$data);
        $data = str_replace(":","",$data);
        return $data;
    }
}
?>