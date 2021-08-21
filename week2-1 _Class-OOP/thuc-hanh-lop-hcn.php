<?php
class Rectangle {
    public $width;
    public $height;    

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    // tính diện tích
    public function getArea() {
    return $this->width * $this->height;
    }
    // tính chu vi
    public function getPerimeter() {
    return (($this->width + $this->height)*2);
    }
    public function display(){
        return "retangle{". "width" . $this->width . ",height=".$this->height."}"; 
    }
}
$rectangle = new Rectangle($width, $height);
echo $rectangle->width = 20;
echo "<br/>";
echo $rectangle->height = 10;
echo "<br/>";
echo $rectangle->getArea();
echo "<br/>";
echo $rectangle->getPerimeter();
echo "<br/>";
echo $rectangle->display();
?>