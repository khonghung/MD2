<?php
include('structure-Stack.php');

$stack = new Stacks();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);

print_r($stack); 

echo "<br/>";

echo $stack->pop();
echo $stack->pop();
echo $stack->pop();

echo "<br/>";

$stack->push(11);
$stack->push(22);
$stack->push(33);
print_r($stack); 

$stack->isEmpty();