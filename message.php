<?php

class Person
{
    
    protected $name;
    
    public function __construct($name)
    {
        
        $this->name = $name;
    }
    
}

class Buisiness
    
{
    protected $staff;
    protected $person;
    
    public function __construct(Staff $staff)
    {
        
        $this->staff = $staff;
        
    }
    
   
    
    public function hire(Person $person) //type hinting
    {
        
        
        //add $person to staff collection
        
        $this->staff->add($person);
        
        
    }
    
    public function getStaffMembers()
    {
        
       return $this->staff->members();
        
    }
    
}

class Staff
{
    protected $members = [];
    
    public function __construct($members = [])
    {
        $this->members = $members;
        
    }
    
    public function add(Person $person)
    {
        $this->members[] = $person; 
        
    }
    
    public function members()
    {
        
       return $this->members;
        
    }
    
}


$ornab = new Person ('Ornab Ahmed');

$staff = new Staff([$ornab]);

$theme = new Buisiness($staff);

$theme->hire(new Person('asif'));

var_dump($theme->getStaffMembers());