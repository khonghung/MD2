<?php 
include_once('LinkedList.php');



$demo = new LinkedList();
$demo->insertFirst(10);
$demo->insertFirst(20);
$demo->insertFirst(30);
echo $demo->addIndex(1,2);  

?>