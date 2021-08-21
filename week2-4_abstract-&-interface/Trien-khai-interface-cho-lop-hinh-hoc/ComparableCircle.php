<?php

include_once "Circles.php";
include_once "Comparable.php";

class ComparableCircle extends Circles implements Comparable
{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }

    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();
       

        if ($this->radius < $circleOtherRadius) {
            return 1;
        } else if ($this->radius > $circleOtherRadius) {
            return -1;
        } else {
            return 0;
        }
    }
}


