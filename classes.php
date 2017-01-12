<?php 

 class Task
 
 {
 
     public $description;
     public $completed = false;
     
     public function __construct($description)
     
     {
        
         $this->description = $description;
         
     }
     
     
 }

   
$task= new Task('Learn OOP');
$task2= new Task('Learn PHP & Laravel');

 
var_dump ($task2->completed) ;

//var_dump($task->description);

  