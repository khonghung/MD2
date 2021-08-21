<?php
class Point {
   public $x;
   public $y;

   
   public function __construct($x, $y) {
       $this->x = $x;
       $this->y = $y;
   }


   public function getX() {
       return $this->x;
   }

   public function setX($x):void {
       $this->x = $x;
   }

   public function getY() {
       return $this->y;
    }

    public function setY($y):void {
        $this->y = $y;
    }

    public function setXY($x, $y):void {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY(){
     $xy = [$this->x, $this->y];
     return "(".$xy[0].",".$xy[1].")";
        
    }

    public function __toString(){
        echo "x = ". $this->x,", " . "y = ". $this->y;
       
    }
    
}


?>
