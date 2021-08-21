<?php
include_once ('Class-LinkedList.php');


$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);

$demo = $linkedList->add(3,2);
// $totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $demo;
// echo $totalNodes."<br/>";
echo implode ('-' , $linkData); 

