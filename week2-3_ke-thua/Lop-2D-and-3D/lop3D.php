<?php
include "lop2D.php";

class point3D extends Point2D{
   public $z;

   public function __construct($x, $y, $z) {
       parent::__construct($x, $y);
       $this->z = $z;
   }

   public function getZ() {
       return $this->z;
   }

   public function setZ($Z):void {
       $this->z = $Z;
   }

   public function setXYZ($x, $y, $z):void {
       parent::setXY($x, $y, $z);
   }

   public function getXY()
    {
        $xy = [$this->x, $this->y];
        return "(".$xy[0].",".$xy[1].",".$xy[2].")";
    }
   
    public function toString(){
        echo parent::toString(), " ,z= ".$this->z;
    }




}
?>

