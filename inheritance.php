<?php

//class Mother
//{
//    public function getEyeCount()
//    {
//        return 2;
//        
//    }
//    
//    
//}
//
//class Child extends Mother
//{
//    
//}
//
//(new Child)->getEyeCount();

class Shape
    
{
    protected $length = 4;
    public function getArea()
   
   {
       return pow($this->length, 2);  
       
       
   } 
    
}

class Square extends Shape

{
    
    
}


class Triangle extends Shape

{
    protected $base = 4;
    protected $height = 7;
    public function getArea()
   
   {
       return 0.5 * $this->base * $this->height ;  
       
       
   }
    
    
    
}

 
echo "Square:" . (new Square)->getArea() . '<br> <br>';
    
echo "Triangle:" . (new Triangle)->getArea();




