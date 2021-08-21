<?php
include "classQueue.php";

$que = new Queue();
$que->enQueue(5);
$que->enQueue(4);
$que->enQueue(6);
$que->enQueue(1);
$que->enQueue(1);


echo "<pre/>";
print_r($que);

// echo $que->deQueue();
// echo "<br/>";
// echo $que->deQueue();



echo "<br/>";

// echo $que->isEmpty();
