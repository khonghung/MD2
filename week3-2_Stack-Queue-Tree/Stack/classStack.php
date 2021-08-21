<?php
class Stacks {
    public $stack;
    public $limit;

    
    public function __construct($limit = 10){
        $this->stack = array();
        $this->limit = $limit;
    }


    public function push($value){
      if(count($this->stack) < $this->limit){
         array_unshift($this->stack, $value);
      }
      else { 
          throw new RuntimeException("Stack is Full!");
      }
    }


    public function isEmpty(){
        return empty($this->stack);
        
    }


    public function pop(){
     if($this->isEmpty()){
         throw new RuntimeException("Stack is Empty!");
     } else {
         return array_shift($this->stack);
     }
    }


    public function top(){
        return current($this->stack);
    }




    
}