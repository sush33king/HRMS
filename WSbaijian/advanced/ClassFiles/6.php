<?php  
class game  
{  
function add(){}  
}  
class gta_5 extends game  
{  
function add()  
{  
print "gta_5 has been add.</br>";  
}  
}  
class date_2 extends game  
{  
function add()  
{  
print "date_2 has been add.</br>";  
}  
}  
class touch extends game  
{  
function add()  
{  
print "touch has been add.";  
}  
}  
   
$Val=array(2);  
  
$Val[0]=new gta_5();  
$Val[1]=new date_2();  
$Val[2]=new touch();  
  
for($i=0;$i<3;$i++)  
{  
$Val[$i]->add();  
}  
?>  