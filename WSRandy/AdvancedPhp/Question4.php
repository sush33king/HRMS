<?php

class Gpu 
{
    public $brand, $price;
    public static $count=0;
    
    public function __construct($brand, $price)
    {
    $this->Brand= $brand;
    $this->Price= $price; 
    Gpu::$count++;
    }
}

$Gpu1= new Gpu("Zotac",1500);
$Gpu2= new Gpu("Galax",1400);
$Gpu3= new Gpu("Msi",1900);
$Gpu4= new Gpu("Asus",1800);
$Gpu5= new Gpu("Nvidia",1800);

echo "The amount of objects in the class is " .Gpu::$count . ".";

?>