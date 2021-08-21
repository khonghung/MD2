<?php
class Stack{

   public $stack;
   public $size;


   public function __construct(){
       $this->stack = [];
       $this->size = 0;
   }
 
   public function push($value){
      array_push($this->stack, $value);
      $this->size++;
   }

   public function isEmpty(){
       return $this->stack;
   }

   public function pop(){
       array_pop($this->stack);
       $this->size--;
   }




}


