<?php

namespace Theme_E;

use Theme_E\Users\Person;

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