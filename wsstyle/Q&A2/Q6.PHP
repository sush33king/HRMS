<?php  
class phone
{  
    function describe(){}  
}  
class iphone extends phone  
{  
    function describe()  
    {  
        print "iphone has been describe.</br>";  
    }  
}  
class sumsung extends phone  
{  
    function describe()  
    {  
        print "sumsung has been describe.</br>";  
    }  
}  
class huawei extends phone  
{  
    function describe()  
    {  
        print "huawei has been describe.";  
    }  
}  
   
$Val=array(2);  
  
$Val[0]=new iphone();  
$Val[1]=new sumsung();  
$Val[2]=new huawei();  
  
for($i=0;$i<3;$i++)  
{  
$Val[$i]->describe();  
} 
?>