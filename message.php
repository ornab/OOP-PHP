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
    
    public function __construct(Staff $staff)
    {
        
        $this->staff = $staff;
        
    }
    
    protected $person;
    
    public function hire(Person $person) //type hinting
    {
        
        //$this->person = $person;
        //add $person to staff collection
        
        $this->staff->add($person);
        
        
    }
    
}

class Staff
{
    protected $members = [];
    
    public function add(Person $person)
    {
        $this->members[] = $person; 
        
    }
    
}


$ornab = new Person ('Ornab Ahmed');

$staff = new Staff;

$theme_e = new Buisiness($staff);

$theme_e->hire($ornab);

var_dump($staff);