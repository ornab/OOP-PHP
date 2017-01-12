<?php 

 class Task
 
 {
 
     public $description, $title;
    
     public $completed = false;
     
     public function __construct($title, $description)
     
     {
        
        
         $this->title = $title;
         
         $this->description = $description;
         
         
     }
     
     function complete()
         
     {
         
         $this->completed = true;
         
     }
     
     
 }

   
$task= new Task('Learn OOP', 'Learn OOP with PHP');
//$task2= new Task('Learn PHP & Laravel','Lerning PHP & Laravel is fun');

//$task->complete();

 
var_dump ($task->title);
var_dump ($task->description);

//var_dump($task->description);
//var_dump($task->completed);

  