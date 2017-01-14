<?php

namespace Theme_E\Users;

class Person
{
    
    protected $name;
    
    public function __construct($name)
    {
        
        $this->name = $name;
    }
    
}