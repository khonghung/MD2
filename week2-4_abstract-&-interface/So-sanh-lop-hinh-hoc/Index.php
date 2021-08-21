<?php
include "ComparatorCircle.php";

$circleOne = new Circle("hình tròn 1 ", 4);
$circleTwo = new Circle("hình tròn 2 ", 3);

$comparatorCircle = new ComparatorCircle();
 echo($comparatorCircle->compare($circleOne, $circleTwo));