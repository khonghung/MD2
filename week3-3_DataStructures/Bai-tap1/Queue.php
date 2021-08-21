<?php

use function PHPUnit\Framework\isEmpty;

include "Square-Dance.php";

$Male = new SplQueue();
$FeMale = new SplQueue();


$Dancer1 = new Dancer("Hung", "Male");
$Male->enqueue($Dancer1);

$Dancer2 = new Dancer("Cuong", "Male");
$Male->enqueue($Dancer2);

$Dancer3 = new Dancer("Hoang", "Male");
$Male->enqueue($Dancer3);

$Dancer4 = new Dancer("Lam", "Male");
$Male->enqueue($Dancer4);

$Dancer5 = new Dancer("Thuy", "Female");
$FeMale->enqueue($Dancer5);

$Dancer6 = new Dancer("Trang", "Female");
$FeMale->enqueue($Dancer6);

$Dancer7 = new Dancer("Hang", "Female");
$FeMale->enqueue($Dancer7);


// 
// print_r($Male);
// echo "<pre>";
// print_r($FeMale);


if ($Male->isEmpty() && $FeMale->isEmpty()) {
    echo "không đủ điều kiện";
} else {
    while (count($Male) > 0 && count($FeMale) > 0) {
        $Male->dequeue();
        echo "<pre>";
        print_r($Male);
        echo "<pre>";
        $FeMale->dequeue();
        print_r($FeMale);

        if (count($Male)== 0) {
            echo count($FeMale);
        } else {
            echo count($Male);
        }
    }
}
