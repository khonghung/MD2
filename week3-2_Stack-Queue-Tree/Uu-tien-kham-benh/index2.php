<?php
include "Patient.php";

$paTi = new Patient();
$paTi->enQueue("Smith",5);
$paTi->enQueue("Jones",4);
$paTi->enQueue("Fehrenbach",6);
$paTi->enQueue("Brown",1);
$paTi->enQueue("Ingram",1);


echo $paTi->__toString();

echo "<br/>";

echo $paTi->deQueue();
echo "<br/>";

echo $paTi->__toString();
