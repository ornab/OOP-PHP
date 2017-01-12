<?php

class Person
{
    public $name;
    
    public $age;
    
    public function __construct($name)
    {
        
        $this->name = $name;
        
    }
    
    public function getAge()
    {
        
        return $this->age;
        
    }
    
    public function setAge($age)
        
    {
        if($age<18)
        {
            
            throw new Exception("You are younger than 18!");
            
        }
        
        $this->age = $age;
        
    }
    
}

$john = new Person('John Doe');

$john->setAge(20);

var_dump($john->getAge());

