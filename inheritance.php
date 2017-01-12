<?php

/************ Counting Eye ************/
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
//echo (new Child)->getEyeCount();


///************ Counting Different Shapes ************/
//
//abstract class Shape
//    
//{
//   protected $color;
//    
//    public function __construct($color = 'red ')
//    {
//       $this->color = $color;
//        
//    }
//    
//    public function getColor()
//    {
//        
//        return $this->color;
//        
//    }
//    
//    abstract protected function getArea(); 
//    
//}
//
//class Square extends Shape
//
//{
//    protected $length = 4;
//    public function getArea()
//   
//   {
//       return pow($this->length, 2);  
//       
//       
//   } 
//    
//    
//}
//
//
//class Triangle extends Shape
//
//{
//    protected $base = 4;
//    protected $height = 7;
//    public function getArea()
//   
//   {
//       return 0.5 * $this->base * $this->height ;  
//       
//       
//   }
//    
//    
//    
//}
//
//class Circle extends Shape
//{
//    protected $radius = 5;
//    
//    public function getArea()
//    {
//        
//        return M_PI * pow($this->radius, 2);
//        
//    }
//    
//    
//}
//
// //ShortHand
//echo "Square: " . (new Square)->getColor() . '<br> <br>';
//    
//echo "Triangle: " . (new Triangle)->getArea() . '<br> <br>';
//
////LongHand
//
//$circle = new Circle();
//echo "Circle: " . $circle->getArea();

/*************** Mailer ***************/

class Mailer
{
    public function send($to, $from, $body)
    {
        
        
    }
    
}

class UserMailer extends Mailer
{
    
    
    
}

class AdminMailer extends Mailer
{
    
    
    
}




