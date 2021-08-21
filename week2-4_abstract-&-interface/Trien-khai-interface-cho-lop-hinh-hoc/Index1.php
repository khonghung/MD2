<?php

include_once "ComparableCircle.php";

$circleOne = new ComparableCircle("circle one", 4);
$circleTwo = new ComparableCircle("circle two", 3);


var_dump($circleOne->compareTo($circleTwo));