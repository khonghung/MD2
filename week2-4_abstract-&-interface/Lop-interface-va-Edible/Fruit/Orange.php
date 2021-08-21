<?php

include_once (dirname(__FILE__)."/../AbstractClass/Fruit.php");

class Orange extends Fruit 
{
public function howtoEat(){
    return "squeeze...";
}
}