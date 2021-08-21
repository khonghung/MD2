<?php

include "Class-Node.php";
class Queue { 
    public $font;   //dùng để trỏ đến Node đầu tiên
    public $back;   //dùng để trỏ đến Node cuối cùng 


    public function isEmpty(){
        return $this->font == null;
    }

    public function enQueue($value){
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->value = $value;
        if($this->isEmpty()){
            $this->font = $this->back;
        } else { 
            $oldBack->next = $this->back;
        }
    }


    public function deQueue(){
     if($this->isEmpty()){
         return null;
     }

     $removeValue = $this->back->value;
     $this->back = $this->back->next;
     return $removeValue;
    }
}