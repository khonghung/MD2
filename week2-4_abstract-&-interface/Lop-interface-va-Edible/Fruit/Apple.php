<?php

include_once (dirname(__FILE__)."/../AbstractClass/Fruit.php");

class Apple extends Fruit 
{
public function howtoEat(){
    return "bite...";
}
}