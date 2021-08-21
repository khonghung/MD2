<?php
class LinkedList {
    
    public $firstNode;
    public $lastNode;
    public $count;
    
    function __construct()
    {
        $this->firstNode = 0;
        $this->lastNode = NULL;
        $this->count = 0;
    
    }


    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == NULL) {
            $this->lastNode = $link;
        }

        $this->count++;
    }
    
    
    function addIndex($data, $index) {

        $link = new Node($data);
        $c = $this->firstNode;
        // $p = $this->firstNode;
        
        for ($i = 1; $i < $index; $i++) {
            $p = $c;
            $c = $c->next;
        }
        
        $link->next = $c;
        $p->next = $link;
        $this->count++;
    }




}