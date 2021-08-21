<?php
class Circle
{
    public $radius;
    public $color;

    public function __construct($name, $radius)
    {
        $this->color = $name;
        $this->radius = $radius;
    }
        


    public function setRadius($radius)
    {
        $this->radius = $radius;
    }


    public function getRadius()
    {
        return $this->radius;
    }


    public function setColor($name)
    {
        $this->name = $name;
    }


    public function getName()
    {
        return $this->name;
    }
}
